<?php
?>
<style>
    #uni_modal .modal-footer{
        display:none;
    }
</style>
<div class="container-fluid">
<form action="" id="register-form">
<input type="hidden" name="id">
    <div class="col-12">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fullname" class="control-label">Full Name</label>
                    <input type="text" name="fullname" id="fullname" required class="form-control form-control-sm rounded-0" value="">
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">Email</label>
                    <input type="email" name="email" id="email" required class="form-control form-control-sm rounded-0" value="">
                </div>
                <div class="form-group">
                    <label for="contact" class="control-label">Contact</label>
                    <input type="text" name="contact" id="contact" required class="form-control form-control-sm rounded-0" value="">
                </div>
                <div class="form-group">
                    <label for="address" class="control-label">Address</label>
                    <textarea rows="2" name="address" id="address" required class="form-control form-control-sm rounded-0"></textarea>
                </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                    <label for="username" class="control-label">Username</label>
                    <input type="username" name="username" id="username" required class="form-control form-control-sm rounded-0" value="">
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" name="password" id="password" required class="form-control form-control-sm rounded-0" value="">
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-12 d-flex justify-content-end">
                <button class="btn btn-sm btn-success rounded-0 me-1">Create Account</button>
                <button class="btn btn-sm btn-danger rounded-0" type="button" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</form>
</div>

