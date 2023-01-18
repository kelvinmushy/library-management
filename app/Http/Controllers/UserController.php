<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roles = DB::table('roles')->get();
        return view('user.index', compact('roles'));
    }
    public function create()
    {
        //
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);


        $form_data = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        );
        $user = User::create($form_data);
        



        return response()->json([
            'success' => true,
            'message' => 'User Saved',
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
        if (request()->ajax()) {
            $data = DB::table('users')->find($id);
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',

        ]);

        $form_data = array(
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        );
        DB::table('users')->where('id', '=', $id)->update($form_data);

        return response()->json([
            'success' => true,
            'message' => 'User Updated',
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
        $form_data = array(
            'hide' =>1,
            
        );
        DB::table('users')->where('id', '=', $id)->update($form_data);
        return response()->json([
            'success' => true,
            'message' => 'User Delete',
        ]);
    }
    public function userApi()
    {
        $user = DB::table('users')->where('hide',0)
            ->get();
        return DataTables::of($user)
            ->editColumn('action', function ($user) {
                return
                    '<a onclick="editUser(' . $user->id . ')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                    '<a href="/view/user/profile/'.$user->id .'" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-eye-open"></i> View</a> ' .
                    '<a onclick="deleteUser(' . $user->id . ')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i>Delete</a>';
            })
            ->rawColumns(['action'])
            ->escapeColumns([])
            ->make(true);
    }


    public function userProfile($id){
        $user_d=DB::table('users')->where('id',$id)->get();
        return view('user.user_detail',compact('user_d'));
    }
}
