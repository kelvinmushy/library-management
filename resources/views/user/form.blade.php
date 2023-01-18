<div class="modal fade" id="modal-user" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form id="form-user" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">user Name<h3>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <input type="hidden" id="id" name="id">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Roles Name:</label>
                                    <select class="form-control" name="role" id="role">
                                        <option disabled>--select role--</option>
                                            <option value="admin">admin</option>
                                            <option value="admin">user</option>

                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input id="name" type="name" class="form-control "name="name" required>

                                </div>
                            </div>


                        </div>


                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" id="email" name="email" autofocus
                                    required>
                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Password:</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">

                                <span class="help-block with-errors"></span>
                            </div>
                        </div>
                    </div>

                    <!-- /.box-body -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary btnSubmit">Submit</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
