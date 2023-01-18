@extends('layouts.master')
@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Books</h3>
            <a onclick="addForm()" class="btn btn-primary pull-right" style="margin-top: -8px;">Add Books</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
           <div class="table  table-response">
            <table id="book-table" class="table table-striped">
                <thead>
                <tr>
                    <th>Book Cover</th>
                    <th>Book Name</th>
                    <th>Book description</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
           </div>
        </div>
        <!-- /.box-body -->
    </div>

    @include('book.form')
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

    var table = $('#book-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/api/books') }}",
            columns: [
                {data: 'book_cover', name: 'book_cover'},
                {data: 'book_name', name: 'account_name'},
                {data: 'book_description', name: 'book_description'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: true, searchable: false}
            ]
        });


        $(function(){
            $('#form-book').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ url('/books') }}";
                    else url = "{{ url('/books') . '/' }}" + id;
                    $.ajax({
                        url : url,
                        type : "POST",
                       data : $('#form-book').serialize(),
                        data: new FormData($("#form-book")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                            $('#modal-book').modal('hide');
                            table.ajax.reload();
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
        function editForm(id) {
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#form-book')[0].reset();
            $.ajax({
                url: "{{ url('/books') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(html) {
                   
                   $('#modal-book').modal('show');
                    $('.modal-title').text('Edit Book');
                    $('#id').val(html.data.id);
                    $('#book_name').val(html.data.book_name);
                    $('#book_description').val(html.data.book_description);
                    $('#book_cover').val(html.data.book_cover);
                    $('#book').val(html.data.book);
                  
                  
                
                },
                error : function() {
                    alert("Nothing Data");
                }
            });
        }
    </script>

   {{-- <script type="text/javascript">
        var table = $('#user-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/asaliExpensiveApi') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'description', name: 'description'},
                {data: 'book_name', name: 'account_name'},
                {data: 'amount', name: 'amount'},
                {data: 'created_at', name: 'created_at'},
                {data: 'adds', name: 'adds'},
                {data: 'action', name: 'action', orderable: true, searchable: false}
            ]
        });

       
         $(document).change('#account_id',function(){
            var account_id=$('#account_id').val();
            $.ajax({
                url:"check_balance/"+account_id,
                cache:false,
                success: function(html) {            
                $('#account_balance').val('');
                $('#account_balance').val(html.data[0].account_balance);
              }
     
           })
         });
        //    $("#amount").change(function(){
        //   var amount=Number($('#amount').val());
        //   var acc=is.Number($('#account_balance').val());
        //        if(amount>acc){
        //         $("#amount").val('');
        //        }
             
        //        })

        function editForm(id) {
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#form-account')[0].reset();
            $.ajax({
                url: "{{ url('asaliExpensive') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(html) {
                   
                   $('#modal-account-form').modal('show');
                    $('.modal-title').text('Edit Account');
                    $('#id').val(html.data.id);
                    $('#account_name').val(html.data.account_name);
                    $('#account_group').val(html.data.account_group);
                    $('#account_type').val(html.data.account_type);
                  
                },
                error : function() {
                    alert("Nothing Data");
                }
            });
        }

        function deleteData(id){
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then(function () {
                $.ajax({
                    url : "{{ url('asaliExpensive') }}" + '/' + id,
                    type : "POST",
                    data : {'_method' : 'DELETE', '_token' : csrf_token},
                    success : function(data) {
                        table.ajax.reload();
                        swal({
                            title: 'Success!',
                            text: data.message,
                            type: 'success',
                            timer: '1500'
                        })
                    },
                    error : function () {
                        swal({
                            title: 'Oops...',
                            text: data.message,
                            type: 'error',
                            timer: '1500'
                        })
                    }
                });
            });
        }

        $(function(){
            $('#form-account').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ url('asaliExpensive') }}";
                    else url = "{{ url('asaliExpensive') . '/' }}" + id;

                    $.ajax({
                        url : url,
                        type : "POST",
                        //hanya untuk input data tanpa dokumen
//                      data : $('#form-account').serialize(),
                        data: new FormData($("#form-account")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                            $('#modal-account-form').modal('hide');
                            table.ajax.reload();
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
    </script> --}}

@endsection
