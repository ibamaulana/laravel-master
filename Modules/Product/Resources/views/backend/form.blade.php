<form id="form-user" enctype="multipart/form-data" method="POST">
{{ csrf_field() }}
    <div class="modal-body">
        <div class="alert alert-danger" id="alert-error" role="alert" style="display: none">
          Error ! <div id="message-error"></div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <label>Product Name :</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Product Categories :</label>
                    <select type="text" name="name" class="form-control" required>
                        <option>Categoies I</option>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label>Product Description :</label>
                    <textarea name="email" class="form-control" required></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer ">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info">Create</button>
    </div>
</form>
