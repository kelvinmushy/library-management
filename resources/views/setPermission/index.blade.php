@extends('layouts.master')


@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="box">
 
                               
    <h3 class="title-5 m-b-35">Edit  Role And Permissions<span style="color:green">  {{@$staff_role->name}}</span></h3>               
   </div>
         <div class="row">
             <div class="col-md-12">
            
             <form  id="form-permission" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST')}}
                    <div class="box-body">
                   <input type="text" id="role_id" name="id" value="{{@$staff_role->id}}"> 
                    <div class="row">
                        <div class="col-md-12">
                         <div class="form-group">
                          
                            <select class="form-control" id="permission_id" name="permission_id">
                                @foreach($permission as $permission)
                                <option value="{{$permission->id}}">
                                       {{$permission->name}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                     
                    </div> 
                    </div>
                  
                </div>

                
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
              

            </form>
            </div>
         </div>
    </div>
 @include('role.form')
@endsection

@section('bot')
  
    <script src=" {{ asset('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }} "></script>

    <script src="{{ asset('assets/validator/validator.min.js') }}"></script>


    <script type="text/javascript">
        var table = $('#user-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ url('/apiRole') }}",
            columns: [
                {data: 'name', name: 'name'},
                {data: 'setpermission', name:'setpermission'},
                {data: 'status', name: 'status'},
                {data: 'action', name: 'action', orderable: true, searchable: false}
            ]
        });

        function addForm() {
        
            $('#modal-role').modal('show');
            $('#form-permission')[0].reset();
            $('.modal-title').text('Role Type');
        }
        function editRole(id) {
            save_method = 'edit';
            $('input[name=_method]').val('PATCH');
            $('#form-permission')[0].reset();
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
            $('#form-permission').validator().on('submit', function (e) {
                save_method = "add";
                 $('input[name=_method]').val('POST');
                if (!e.isDefaultPrevented()){
                    var id = $('#id').val();
                    if (save_method == 'add') url = "{{ url('/role_permissions') }}";
                    else url = "{{ url('/role_permissions') . '/' }}" + id;

                    $.ajax({
                        url : url,
                        type : "POST",
                    
                        data: new FormData($("#form-permission")[0]),
                        contentType: false,
                        processData: false,
                        success : function(data) {
                          
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
