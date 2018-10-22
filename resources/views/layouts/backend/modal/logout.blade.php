<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="addOrder" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h5 class="modal-title">LOGOUT</h5> </div>
            <div class="modal-body">
                <h5>Are you sure to logout ?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                <a type="button" href="{{ route('logout') }}" class="btn btn-danger waves-effect waves-light">Yes</a>
            </div>
        </div>
    </div>
</div>