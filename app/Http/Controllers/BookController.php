<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Book;
use App\Models\UserCommentBook;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Validator;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Book::all();
        return response()->json(['data'=>$books]);
    
    }

    public function getIndex(){
        return view('book.index');
    }
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'book_name' => 'required',
            'book_cover' => 'required',
            'book_description' => 'required',
            'book' => 'required'
          ]);

         $file = $request->file('book_cover');
           if ($file) {
            $path = 'img/';
            $filename = uniqid(date('Hmdysi')) . '_' . $file->getClientOriginalName();
            $upload = $request->file('book_cover')->move($path, $filename);
             $form_data = array(
                'book_name'=>$request->book_name,
                'book_cover'=>$path . $filename,
                'book'=>$request->book,
                'book_description' =>$request->book_description,
                
          
            );
            DB::table('books')->insert($form_data);
            }
          

        return response()->json([
            'success' => true,
            'message' => 'Book Saved',
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
           //
           if(request()->ajax()){
            $data =DB::table('books')->find($id);
            return response()->json(['data' => $data]);   
           }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       
         $this->validate($request, [
            'book_name' => 'required',
            'book_cover' => 'required',
            'book_description' => 'required',
            'book' => 'required',
            
        ]);
          $file = $request->file('book_cover');
           if ($file) {
            $path = 'img/';
            $filename = uniqid(date('Hmdysi')) . '_' . $file->getClientOriginalName();
            $upload = $request->file('book_cover')->move($path, $filename);
             $form_data = array(
                'book_name'=>$request->book_name,
                'book_cover'=>$path . $filename,
                'book'=>$request->book,
                'book_description' =>$request->book_description,
          
            );
              DB::table('books')->where('id','=',$id)->update($form_data);
            }
      
		return response()->json([
			'success' => true,
			'message' => 'Data Updated',
		]);


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
       {
        DB::table('books')->where('id', '=', $id)->delete();
		return response()->json([
			'success' => true,
			'message' => 'book Delete',
		]);

      
        
    }
    public function bookApi() {
       $book= DB::table('books')
        
         ->get();

        return DataTables::of($book)
             ->editColumn('action', function($book){
          
                return
                '<a onclick="editForm(' . $book->id . ')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                '<a href="/view/book/'.$book->id .'" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-eye-open"></i> View</a> ' .
                '<a onclick="deleteData(' . $book->id . ')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>Delete</a>';
              
            
               
            })
            ->rawColumns(['action'])
            ->escapeColumns([])
            ->make(true);
    }

    public function readBook($id){
        $book=DB::table('books')->where('id',$id)->first();
        return view('book.read_book',compact('book'));

    }

      public function getAllBook(){
       $book=DB::table('books')->get();
      return view('book.book_lists',compact('book'));
      }
   

      public function userLikeBook($book_id,$user_id){ 
        
        $get=DB::table('user_like_books')->where('user_id',$user_id)->where('book_id',$book_id)->first();
        
        if($get==""){
            $form_data = array(
                'user_like'=>1, 
                'user_id'=>$user_id, 
                'book_id'=>$book_id, 
            );
           
            DB::table('user_like_books')->insert($form_data);
	     	return response()->json([
			'success' => true,
			'message' => 'You Like',
		]);
        }
        if($get->user_like==1){
            $form_data = array(
                'user_like'=>0, 
               
            );
            DB::table('user_like_books')->where('book_id',$book_id)->where('user_id',$user_id)->update($form_data);
	     	return response()->json([
			'success' => true,
			'message' => 'You Unlike',
		]);
        

        }
        if($get->user_like==0){
            $form_data = array(
                'user_like'=>1, 
               
            );
            DB::table('user_like_books')->where('book_id',$book_id)->where('user_id',$user_id)->update($form_data);
	     	return response()->json([
			'success' => true,
			'message' => 'You like',
		]);
        

        }
       
       

      }

      public function userFavouriteBook($book_id,$user_id){ 
        $get=DB::table('user_mark_books')->where('user_id',$user_id)->where('book_id',$book_id)->first();
        if($get==""){
            $form_data = array(
                'favourite'=>1, 
                'user_id'=>$user_id, 
                'book_id'=>$book_id, 
            );
           
            DB::table('user_mark_books')->insert($form_data);
	     	return response()->json([
			'success' => true,
			'message' => 'You Like',
		]);
        }
        if($get->favourite==1){
            $form_data = array(
                'favourite'=>0, 
               
            );
            DB::table('user_mark_books')->where('book_id',$book_id)->where('user_id',$user_id)->update($form_data);
	     	return response()->json([
			'success' => true,
			'message' => 'Favourite',
		]);

        }
        if($get->favourite==0){
            $form_data = array(
                'favourite'=>1, 
               
            );
            DB::table('user_mark_books')->where('book_id',$book_id)->where('user_id',$user_id)->update($form_data);
	     	return response()->json([
			'success' => true,
			'message' => 'Unfavourite',
		]);
        

        }
       
       

      }
      public function userBookComment(Request $request){

       
        $form_data = array(
            'user_comment'=>"yes keldhdjsfhnsk", 
            'user_id'=>1, 
            'book_id'=>1,
            
        );
        UserCommentBook::updateOrCreate(['book_id' =>$request->book_id,'user_id'=>$request->user_id],
        $form_data);
        return response()->json([
            'success' => true,
            'message' => 'Data Saved',
        ]);
       }

       public function countFavoureite(){
       $total=DB::table('books')->join('user_mark_books','books.id','user_mark_books.book_id')-> select('book_name','book_description', \DB::raw('COUNT(user_mark_books.book_id) as totalLiked'))
        ->groupBy('user_mark_books.book_id')
        ->where('user_mark_books.favourite',1)
        ->get();
        return response()->json(['data'=>$total]);
       
       }
}
