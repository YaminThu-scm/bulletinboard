@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-8 col-lg-5 shadow-sm p-4 p-md-5 mb-5 rounded">
            <h5 class="cmn-ttl mb-4">Create User Confirmation</h5>
            <form>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputName" class="col-sm-4">Name</label>
                    <div class="col-sm-8">
                        User01
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputEmail" class="col-sm-4">Email Address</label>
                    <div class="col-sm-8">
                        user01@gmail.com
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputPassword" class="col-sm-4">Password</label>
                    <div class="col-sm-8">
                        *********
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputConfirmPassword" class="col-sm-4">Type</label>
                    <div class="btn-group col-sm-10">
                        Admin
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputPhoneNo" class="col-sm-4">Phone</label>
                    <div class="col-sm-8">
                        09989898989
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputDOB" class="col-sm-4">Date Of Birth</label>
                    <div class="col-sm-8">
                        2004/10/05
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputAddress" class="col-sm-4">Address</label>
                    <div class="col-sm-8">
                        Yangon
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-4">Create</button>
                <button type="button" class="btn btn-outline-primary">Cancel</button>
            </form>
        </div>
    </div>

</div>
@endsection