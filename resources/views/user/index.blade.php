@extends('layouts.master')
@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">users</h3>
            <a onclick="addForm()" class="btn btn-primary pull-right" style="margin-top: -8px;">Add users</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="user-table" class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

    @include('user.form')
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
        $('#modal-user').modal('show');
        $('#form-user')[0].reset();
        $('.modal-title').text('Add user');
    }
    var table = $('#user-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/api/users') }}",
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', orderable: true, searchable: false}
            ]
        });
        function deleteUser(id){
            var csrf_token = $('meta[name="csrf-token"]').attr('content');
            swal({
                title: 'Are you sure?',
                text: "You will be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#d33',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes, status changed!'
            }).then(function () {
                $.ajax({
                    url : "{{ url('user') }}" + '/' + id,
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
            $('#form-user').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ url('/user') }}";
                    else url = "{{ url('/user') . '/' }}" + id;
                
                    $.ajax({
                        url : url,
                        type : "POST",
                        data: new FormData($("#form-user")[0]),
                        contentType: false,
                        processData: false,
                        beforeSend:function(){
                        $(".btnSubmit").attr("disabled",true);
                        $('.btnSubmit').html("Please Wait...");
                        },
                        success : function(data) {
                            $('#modal-user').modal('hide');
                            table.ajax.reload();
                            $(".btnSubmit").attr("disabled",false);
                            $('.btnSubmit').html("submit");
                            swal({
                                title: 'Success!',
                                text: data.message,
                                type: 'success',
                                timer: '1500'
                            })
                        },
                        error : function(data){
                            $(".btnSubmit").attr("disabled",false);
                            $('.btnSubmit').html("submit");
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
        function editUser(id) {
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#form-user')[0].reset();
            $.ajax({
                url: "{{ url('/user') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(html) { 
                   $('#modal-user').modal('show');
                    $('.modal-title').text('Edit User');
                    $('#id').val(html.data.id);
                    $('#name').val(html.data.name);
                    $('#email').val(html.data.email);
                    $('#password').val(html.data.password);
                },
                error : function() {
                    alert("Nothing Data");
                }
            });
        }
 
    </script>

 

@endsection
