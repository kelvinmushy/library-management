<div class="modal fade" id="modal-book" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="form-book" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="box-body">
                        <input type="hidden" id="id" name="id">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>book Name</label>
                                    <input type="text" name="book_name" id="book_name" class="form-control"
                                        required />
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>book Description</label>
                                    <textarea type="text" name="book_description" id="book_description" class="form-control"
                                        required></textarea >

                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>book cover(png,jpg format)</label>
                                    <input type="file" name="book_cover" id="book_cover" class="form-control"
                                        required />
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>book(PDF)</label>
                                    <input type="file" name="book" id="book" class="form-control"
                                        required />
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>


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
