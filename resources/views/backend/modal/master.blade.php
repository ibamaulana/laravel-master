<div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="addOrder" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body load-data" style="display: block">
                <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{ url('image/load.gif') }}" height="150px">
                    <p>Loading Data, Please wait...</p>
                </div>
            </div>
            </div>
                    
            <div class="form-data">

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="addOrder" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete User</h4>
            </div>
            <div class="modal-body load-delete" style="display: none">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <img src="{{ url('image/load.gif') }}" height="150px">
                        <p>Loading Data, Please wait...</p>
                    </div>
                </div>
            </div>
            <div class="form-delete">
                <div class="modal-body">
                    <h4>Are you sure to delete this user?</h4>
                </div> 
                <div class="modal-footer ">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="delete-user" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
