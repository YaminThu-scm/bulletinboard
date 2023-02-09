@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Create User Confirmation</h5>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" id="">
                        @csrf
                        <input type="hidden" name="profile" id="inputProfile" value="{{old('profile')}}">
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputName" class="col-sm-4">Name</label>
                            <div class="col-sm-8">
                                <input type="hidden" name="name" value="{{ old('name') }}" class="form-control" id="inputName" required autocomplete autofocus readonly="readonly">
                                <span>{{ old('name') }}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputEmail" class="col-sm-4">Email Address</label>
                            <div class="col-sm-8">
                                <input type="hidden" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail" required autocomplete autofocus readonly="readonly">
                                <span>{{ old('email') }}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputPassword" class="col-sm-4">Password</label>
                            <div class="col-sm-8 show-password">
                                <input type="password" name="password" value="{{old('password')}}" class="form-control" id="myInput" autocomplete="current-password" required autocomplete autofocus readonly="readonly">
                                <span class="password-icn" id="js-password">
                                    <i class="fa-solid fa-eye-slash" onclick="showPassword()"></i>
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputConfirmPassword" class="col-sm-4">Type</label>
                            <div class="col-sm-8">
                                <select hidden class="form-select" aria-label="Default select example" name="type" autocomplete autofocus readonly="readonly">
                                    @if(old('type') == '0')<option value="0" selected> Admin</option>@endif
                                    @if(old('type') == '1')<option value="1" selected> User</option>@endif
                                </select>
                                <span>
                                    @if(old('type') == '0') Admin @endif
                                    @if(old('type') == '1') User @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputPhoneNo" class="col-sm-4">Phone</label>
                            <div class="col-sm-8">
                                <input type="hidden" name="phno" value="{{ old('phno') }}" class="form-control" id="inputPhoneNo" autocomplete autofocus readonly="readonly">
                                <span>{{ old('phno') }}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputDOB" class="col-sm-4">Date Of Birth</label>
                            <div class="col-sm-8">
                                <input type="hidden" name="dob" class="form-control" id="inputDOB" value="{{ old('dob') }}" autocomplete autofocus readonly="readonly">
                                <span>{{ old('dob') }}</span>
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputAddress" class="col-sm-4">Address</label>
                            <div class="col-sm-8">
                                <textarea hidden name="address" class="form-control" id="inputAddress" rows="3" autocomplete autofocus readonly="readonly">{{ old('address') }}</textarea>
                                <span>{{ old('address') }}</span>
                            </div>
                        </div>
                        <button type="submit" class="cmn-btn me-4">Create</button>
                        <button type="button" class="cmn-btn bdr-line" onclick="goBack()">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection