<style>
    #uni_modal .modal-footer{
        display:none;
    }
</style>
<div class="container-fluid">
<form action="" id="login-form">
<input type="hidden" name="id">
    <div class="col-12">
        <div class="row">
            <div class="col-12 mb-2">
                <div class="form-group">
                    <label for="username" class="control-label">Username</label>
                    <input type="username" name="username" autofocus id="username" required class="form-control form-control-sm rounded-0" value="">
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password" id="password" required class="form-control form-control-sm rounded-0" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex justify-content-end">
                <button class="btn btn-sm btn-success rounded-0 me-1">Login</button>
                <button class="btn btn-sm btn-danger rounded-0" type="button" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</form>
</div>
