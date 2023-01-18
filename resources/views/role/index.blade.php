@extends('layouts.master')


@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="box">
 
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35"> Role Types</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a  onclick="addForm()" class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>New Role</a>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                             <br>
                                <div class="table-responsive table-striped  table-responsive">
                                 <table id="role-table"  class="table  table-striped table-data2">
                   <thead>
                    <tr>
                    <th>Name</th>
                    <th>setpermission</th>
                    
                    <th></th>
                </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
 @include('role.form')
@endsection

@section('bot')
   
    <script src=" {{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>

  
    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>

 

    <script type="text/javascript">
        var table = $('#role-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/apiRole') }}",
            columns: [
                {data: 'name', name: 'name'},
                {data: 'setpermission', name:'setpermission'},
                {data: 'action', name: 'action', orderable: true, searchable: false}
            ]
        });

        function addForm() {
            save_method = "add";
            $('input[name=_method]').val('POST');
            $('#modal-role').modal('show');
            $('#form-role')[0].reset();
            $('.modal-title').text('Role Type');
        }
        function editRole(id) {
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#form-role')[0].reset();
            $.ajax({
                url: "{{ url('/staff_role') }}" + '/' + id + "/edit",
                type: "GET",
                dataType: "JSON",
                success: function(html) { 
                   $('#modal-role').modal('show');
                    $('.modal-title').text('Edit Role');
                    $('#id').val(html.data.id);
                    $('#role_name').val(html.data.name);
                },
                error : function() {
                    alert("Nothing Data");
                }
            });
        }

        function deleteRole(id){
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
                    url : "{{ url('staff_role') }}" + '/' + id,
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
            $('#form-role').validator().on('submit', function (e) {
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ url('/staff_role') }}";
                    else url = "{{ url('/staff_role') . '/' }}" + id;

                    $.ajax({
                        url : url,
                        type : "POST",
                        data: new FormData($("#form-role")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                            $('#modal-role').modal('hide');
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
      
      
    </script>

@endsection
