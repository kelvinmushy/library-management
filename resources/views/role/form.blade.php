<div class="modal fade" id="modal-role" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  id="form-role" data-toggle="validator" enctype="multipart/form-data" >
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title"> Role</h3>
                </div>
                <div class="modal-body"> 
                    <div class="box-body">
                   <input type="hidden" id="id" name="id">
                    <div class="row">
                        <div class="col-md-12">
                         <div class="form-group">
                            <label> Role</label>
                            <input type="hidden" class="form-control" id="id" name="id">
                            <input type="text" class="form-control" id="role_name" name="role_name"  autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>
                        </div>
                      
                     
                     
                    </div> 
                    </div>
                    <!-- /.box-body -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
