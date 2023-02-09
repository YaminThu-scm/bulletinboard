@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Create User</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data" id="myForm">
                        @csrf
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputName" class="col-sm-4 col-form-label">Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputEmail" class="col-sm-4 col-form-label">Email Address</label>
                            <div class="col-sm-8">
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail" placeholder="Email" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Plaese add the email.</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="inputPassword" placeholder="Password" autocomplete="current-password" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>The password confirmation does not match.</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputConfirmPassword" class="col-sm-4 col-form-label">Confirm Password</label>
                            <div class="col-sm-8">
                                <input type="password" name="password_confirmation" class="form-control  @error('password') is-invalid @enderror" id="inputConfirmPassword" placeholder="ConfirmPassword" autocomplete="current-password" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputType" class="col-sm-4 col-form-label">Type</label>
                            <div class="btn-group col-sm-8">
                                <select name="type" class="form-select" aria-label="Default select example" required>
                                    <option selected>Select Type</option>
                                    <option value="0">Admin</option>
                                    <option value="1">User</option>
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
                                <input type="file" name="profile" class="form-control" id="inputProfile" accept="png,jpeg,jpg">
                            </div>
                        </div>
                        <button type="submit" class="cmn-btn me-4">Confirm</button>
                        <button type="button" class="cmn-btn bdr-line" onClick = "inputClear()">Clear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection