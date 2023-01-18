@extends('layouts.master')
@section('top')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <style>
        .card {

            width: 380px;
            border: none;
            border-radius: 15px;
            padding: 8px;
            background-color: #fff;
            position: relative;
            height: 370px;
        }
    </style>
@endsection

@section('content')
    <div class="box">
       <div class="row">
        <div class="card">

            <div class="card-body">
                {{-- <h3>Book Name  <span class="text-info">{{$book[0]->book_name}}</span></h3> --}}
                <div class="readBook">
                    
                    <img  src="{{ url(isset($book->book_cover) ? $book->book_cover : 'images/noimage.jpg') }}" class="rounded-circle" width="80%;height:30px">
                </div>
            </div>
            <div class="card-footer text-center">
                <input type="hidden" name="user_id" value="{{ \Auth::user()->id }}" id="user_id" />
                <button class="btn btn-theme pull-left" type="button"
                    onclick="clickLike({{ $book->id }})"> {{\App\Models\UserLikeBook::where('user_like',1)->where('book_id',$book->id )->count()}} <i class="fa fa-thumbs-up"
                        aria-hidden="true"></i></button>
                <button class="btn btn-theme" type="button" id="more" id="{{ $book->id }}">2 <i
                        class="fa fa-comment" aria-hidden="true" onclick="clickComment({{ $book->id }})"></i></button>
                <button  class="btn btn-theme pull-right" type="button" id="toright"
                    onclick="clickVafourite({{ $book->id }})"><i
                        class="glyphicon glyphicon-heart"></i></button>
            </div>
        </div>
       </div>
    </div>
@endsection
