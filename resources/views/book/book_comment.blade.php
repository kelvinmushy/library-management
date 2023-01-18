<div class="modal fade" id="modal-comment" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="form-comment" data-toggle="validator" enctype="multipart/form-data">
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
                                    <label>Your Comment</label>
                                    <input type="hidden" name="book_id" id="book_id">
                                    <input type="hidden" name="user_id" id="user_id" value="{{ \Auth::user()->id }}">
                                    <textarea type="text" name="book_comment" id="book_comment" class="form-control"
                                        required></textarea >
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btnComment">Submit</button>
                    </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
