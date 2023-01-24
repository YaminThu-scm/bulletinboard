@extends('layouts.app')

@section('content')
<div class="container w-50">
    <form>
        <div class="row d-flex justify-content-between">
            <h5 class="cmn-ttl mb-4 col-sm-4">User Profile</h5>
            <a href="#" class="col-sm-6">Edit</a>
        </div>
        <div class="form-group row mb-4">
            <label for="inputName" class="col-sm-2">Name</label>
            <div class="col-sm-10">
                <p class="mb-2">User01</p>
                <img src="https://us.123rf.com/450wm/pandavector/pandavector1901/pandavector190105281/pandavector190105281.jpg?ver=6 wid" width="150" height="150" class="img-thumbnail" alt="...">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputEmail" class="col-sm-2">Email Address</label>
            <div class="col-sm-10">
                user01@gmail.com
            </div>
        </div>

        <div class="form-group row mb-4">
            <label for="inputConfirmPassword" class="col-sm-2">Type</label>
            <div class="btn-group col-sm-10">
                User
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
    </form>
</div>
@endsection