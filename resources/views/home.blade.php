@extends('layouts.master')
@section('top')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <style>
        .card {
            width: 380px;
            border: none;
            padding: 20px;
            background-color: #fff;
            position: relative;
            height: 150px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">

        <div class="box">
            <h2 style="margin:20px">List Of Books</h2>
            <div class="row">
                @foreach ($book as $book)
                    <div class="col-md-4">
                        <div class="card">

                            <div class="card-body">
                                {{-- <h3>Book Name  <span class="text-info">{{$book[0]->book_name}}</span></h3> --}}
                                <div class="readBook">
                                    
                                    <img  src="{{ url(isset($book->book_cover) ? $book->book_cover : 'images/noimage.jpg') }}" class="rounded-circle" width="100%">
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
                @endforeach
            </div>
        </div>
        @include('book.book_comment')
    </div>
@endsection
@section('bot')
    <!-- DataTables -->
    <script src=" {{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>

    {{-- Validator --}}
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>
    <script type="text/javascript">
        function addForm() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $('#modal-book').modal('show');
            $('#form-book')[0].reset();
            $('.modal-title').text('Add Book');
        }

        function clickLike(id) {
            var book_id = id;
            var user_id = $('#user_id').val();
            $.ajax({
                url: "{{ url('/user/like/book') }}" + '/' + book_id + '/' + user_id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    location.reload();
                    swal({
                        title: 'Success!',
                        text: data.message,
                        type: 'success',
                        timer: '1500'
                    })

                },
                error: function() {
                    alert("Nothing Data");
                }
            });
        }

        function clickVafourite(id) {
            var book_id = id;
            var user_id = $('#user_id').val();
            $.ajax({
                url: "{{ url('/user/favourite/book') }}" + '/' + book_id + '/' + user_id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    location.reload();
                    swal({
                        title: 'Success!',
                        text: data.message,
                        type: 'success',
                        timer: '1500'
                    })

                },
                error: function() {
                    alert("Nothing Data");
                }
            });
        }

        function clickComment(id){
            save_method = "add";
            $('input[name=_method]').val('POST');
            $('#modal-comment').modal('show');
            $('#form-comment')[0].reset();
            $('.modal-title').text('Add Comment');
            $('#book_id').val(id);  $('#book_id').val(id);
          
        }

        $(function(){
            $('#form-comment').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    
                     if (save_method == 'add') url = "{{ url('/books/comment') }}";
                    else url = "{{ url('/books/comment') . '/' }}" + id;
                    $.ajax({
                        url : url,
                        type : "POST",
                       //data : $('#form-comment').serialize(),
                        data: new FormData($("#form-book")[0]),
                        contentType: false,
                        processData: false,
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        success : function(data) {
                            $('#modal-comment').modal('hide');
                         
                            swal({
                                title: 'Success!',
                                text: data.message,
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error : function(data){
                            swal({
                                title: 'Oops...',
                                text: data.message,
                                type: 'error',
                                timer: '1500'
                            })
                        }
                    });
                    return false;
                }
            });
        });
    </script>
@endsection
