@extends('layouts.app')

@section('content')
<div class="container w-50">
    <h5 class="cmn-ttl mb-4">Create User</h5>
    <form>
        <div class="form-group row mb-4">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" placeholder="Name">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail" placeholder="Email">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="inputConfirmPassword" placeholder="ConfirmPassword">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Type</label>
            <div class="btn-group col-sm-10">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Type</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputPhoneNo" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="inputPhoneNo" placeholder="Phone Number">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputDOB" class="col-sm-2 col-form-label">Date Of Birth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputDOB" placeholder="DOB">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputAddress" rows="3"></textarea>
            </div>
        </div>
        <div class="form-group row mb-5">
            <label for="inputProfile" class="col-sm-2 col-form-label">Profile</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="inputProfile">
            </div>
        </div>
        <button type="submit" class="btn btn-primary me-4">Confirm</button>
        <button type="button" class="btn btn-outline-primary">Clear</button>
    </form>
</div>
@endsection