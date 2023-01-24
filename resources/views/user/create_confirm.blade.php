@extends('layouts.app')

@section('content')
<div class="container w-50">
    <h5 class="cmn-ttl mb-4">Create User Confirmation</h5>
    <form>
        <div class="form-group row mb-4">
            <label for="inputName" class="col-sm-2">Name</label>
            <div class="col-sm-10">
                User01
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputEmail" class="col-sm-2">Email Address</label>
            <div class="col-sm-10">
                user01@gmail.com
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputPassword" class="col-sm-2">Password</label>
            <div class="col-sm-10">
                *********
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputConfirmPassword" class="col-sm-2">Type</label>
            <div class="btn-group col-sm-10">
                Admin
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputPhoneNo" class="col-sm-2">Phone</label>
            <div class="col-sm-10">
                09989898989
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputDOB" class="col-sm-2">Date Of Birth</label>
            <div class="col-sm-10">
                2004/10/05
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputAddress" class="col-sm-2">Address</label>
            <div class="col-sm-10">
                Yangon
            </div>
        </div>
        <button type="submit" class="btn btn-primary me-4">Confirm</button>
        <button type="button" class="btn btn-outline-primary">Clear</button>
    </form>
</div>
@endsection