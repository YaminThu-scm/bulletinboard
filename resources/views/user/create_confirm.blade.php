@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Create User Confirmation</h5>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="profile" id="inputProfile" value="{{old('profile')}}">
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputName" class="col-sm-4">Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputName" required autocomplete autofocus readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputEmail" class="col-sm-4">Email Address</label>
                            <div class="col-sm-8">
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail" required autocomplete autofocus readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputPassword" class="col-sm-4">Password</label>
                            <div class="col-sm-8">
                                <input type="password" name="password" value="{{old('password')}}" class="form-control" id="inputPassword" autocomplete="current-password" required autocomplete autofocus readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputConfirmPassword" class="col-sm-4">Type</label>
                            <div class="col-sm-8">
                                <input type="text" name="type" value="{{old('type')}}" class="form-control" id="inputEmail" required autocomplete autofocus readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputPhoneNo" class="col-sm-4">Phone</label>
                            <div class="col-sm-8">
                                <input type="number" name="phno" value="{{ old('phno') }}" class="form-control" id="inputPhoneNo" autocomplete autofocus readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputDOB" class="col-sm-4">Date Of Birth</label>
                            <div class="col-sm-8">
                                <input type="date" name="dob" class="form-control" id="inputDOB" value="{{ old('dob') }}" autocomplete autofocus readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputAddress" class="col-sm-4">Address</label>
                            <div class="col-sm-8">
                                <textarea name="address" class="form-control" id="inputAddress" rows="3" autocomplete autofocus readonly="readonly">{{ old('address') }}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="cmn-btn me-4">Create</button>
                        <button type="button" class="cmn-btn bdr-line">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection