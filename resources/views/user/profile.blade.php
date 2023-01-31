@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-8 col-lg-5 shadow-sm p-4 p-md-5 mb-5 rounded">
            <form>
                <div class="d-flex justify-content-between mb-5">
                    <h5 class="cmn-ttl">User Profile</h5>
                    <a href="#" class="btn btn-warning">Edit</a>
                </div>
                <div class="form-group row mb-3">
                    <label for="inputName" class="col-sm-4">Name</label>
                    <div class="col-sm-8">
                        <p class="mb-2">{{ $user -> name}}</p>
                        <img src="{{ $user -> profile }}" width="150" height="150" class="img-thumbnail" alt="...">
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputEmail" class="col-sm-4">Email Address</label>
                    <div class="col-sm-8">
                        {{ $user -> email}}
                    </div>
                </div>

                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputConfirmPassword" class="col-sm-4">Type</label>
                    @if($user->type == '0')
                    <label class="col-sm-8">
                        <i class="profile-text">Admin</i>
                    </label>
                    @else
                    <label class="col-sm-8">
                        <i class="profile-text">User</i>
                    </label>
                    @endif
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputPhoneNo" class="col-sm-4">Phone</label>
                    <div class="col-sm-8">
                        {{ $user -> phone}}
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputDOB" class="col-sm-4">Date Of Birth</label>
                    <div class="col-sm-8">
                        {{ $user -> dob}}
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputAddress" class="col-sm-4">Address</label>
                    <div class="col-sm-8">
                        {{ $user -> address}}
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection