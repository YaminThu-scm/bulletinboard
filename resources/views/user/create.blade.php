@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-8 shadow-sm p-4 p-md-5 mb-5 rounded">
            <h5 class="cmn-ttl mb-4">Create User</h5>
            <form method="POST" action="{{ route('user.create') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputName" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputEmail" class="col-sm-4 col-form-label">Email Address</label>
                    <div class="col-sm-8">
                        <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <!-- <div class="form-group row mb-3 mb-md-4">
                    <label for="inputConfirmPassword" class="col-sm-4 col-form-label">Confirm Password</label>
                    <div class="col-sm-8">
                        <input type="password" name="confirmpassword" class="form-control" id="inputConfirmPassword" placeholder="ConfirmPassword">
                    </div>
                </div> -->
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputType" class="col-sm-4 col-form-label">Type</label>
                    <div class="btn-group col-sm-8">
                        <select name="type" class="form-select" aria-label="Default select example">
                            <option selected>Select Type</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputPhoneNo" class="col-sm-4 col-form-label">Phone</label>
                    <div class="col-sm-8">
                        <input type="number" name="phno" class="form-control" id="inputPhoneNo" placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputDOB" class="col-sm-4 col-form-label">Date Of Birth</label>
                    <div class="col-sm-8">
                        <input type="date" name="dob" class="form-control" id="inputDOB" placeholder="DOB">
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputAddress" class="col-sm-4 col-form-label">Address</label>
                    <div class="col-sm-8">
                        <textarea name="address" class="form-control" id="inputAddress" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row mb-5">
                    <label for="inputProfile" class="col-sm-4 col-form-label">Profile</label>
                    <div class="col-sm-8">
                        <input type="file" name="profile" class="form-control" id="inputProfile" accept="png,jpeg">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-4">Confirm</button>
                <button type="button" class="btn btn-outline-primary">Clear</button>
            </form>
        </div>
    </div>

</div>
@endsection