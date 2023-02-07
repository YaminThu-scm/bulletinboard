@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Update User</h5>
                    <div class="profile-img">
                        <img src="https://us.123rf.com/450wm/pandavector/pandavector1901/pandavector190105281/pandavector190105281.jpg?ver=6 wid" width="50" height="50" class="img-thumbnail" alt="...">
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.edit.store', $user->id) }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" name="userId" id="inputId" value="{{ $user -> id }}">

                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputName" class="col-sm-4 col-form-label">Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" id="inputName" placeholder="Name" value="{{$user -> name }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputEmail" class="col-sm-4 col-form-label">Email Address</label>
                            <div class="col-sm-8">
                                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email" value="{{$user -> email }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputConfirmPassword" class="col-sm-4 col-form-label">Type</label>
                            <div class="btn-group col-sm-8">
                                <select class="form-select" aria-label="Default select example" name="type">
                                    <option value="{{$user -> type }}">{{$user -> type }}</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputPhoneNo" class="col-sm-4 col-form-label">Phone</label>
                            <div class="col-sm-8">
                                <input type="text" name="phone" class="form-control" id="inputPhoneNo" value="{{ $user -> phone}}">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputDOB" class="col-sm-4 col-form-label">Date Of Birth</label>
                            <div class="col-sm-8">
                                <input type="date" name="dob" class="form-control" id="inputDOB" placeholder="DOB" value="{{$user -> dob }}">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputAddress" class="col-sm-4 col-form-label">Address</label>
                            <div class="col-sm-8">
                                <textarea name="address" class="form-control" id="inputAddress" rows="3">{{$user -> address }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputProfile" class="col-sm-4 col-form-label">Profile</label>
                            <div class="col-sm-8">
                                <img src="https://us.123rf.com/450wm/pandavector/pandavector1901/pandavector190105281/pandavector190105281.jpg?ver=6 wid" width="150" height="150" class="img-thumbnail" alt="...">
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <a href="#" class="d-block">
                                <label for="inputAddress" class="col-form-label">Change Password</label>
                            </a>
                        </div>
                        <button type="submit" class="cmn-btn me-4">Confirm</button>
                        <button type="button" class="cmn-btn bdr-line">Clear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection