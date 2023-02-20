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
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control @error('name') is-invalid @enderror" id="inputName"
                                        placeholder="Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputEmail" class="col-sm-4 col-form-label">Email Address</label>
                                <div class="col-sm-8">
                                    <input type="text" name="email" value="{{ old('email') }}"
                                        class="form-control @error('email') is-invalid @enderror" id="inputEmail"
                                        placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password" value="{{ old('password') }}"
                                        class="form-control  @error('password') is-invalid @enderror" id="inputPassword"
                                        placeholder="Password" autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputConfirmPassword" class="col-sm-4 col-form-label">Confirm Password</label>
                                <div class="col-sm-8">
                                    <input type="password" name="password_confirmation"
                                        value="{{ old('password_confirmation') }}"
                                        class="form-control  @error('password') is-invalid @enderror"
                                        id="inputConfirmPassword" placeholder="ConfirmPassword"
                                        autocomplete="current-password">
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputType" class="col-sm-4 col-form-label">Type</label>
                                <div class="btn-group col-sm-8">
                                    <select name="type" class="form-select @error('type') is-invalid @enderror">
                                        <option selected value="">Select Type</option>
                                        <option value="0">Admin</option>
                                        <option value="1">User</option>
                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputPhoneNo" class="col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                    <input type="number" name="phno" value="{{ old('phno') }}"
                                        class="form-control @error('phno') is-invalid @enderror" id="inputPhoneNo"
                                        placeholder="Phone Number">
                                    @error('phno')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputDOB" class="col-sm-4 col-form-label">Date Of Birth</label>
                                <div class="col-sm-8">
                                    <input type="date" name="dob" value="{{ old('dob') }}" class="form-control"
                                        id="inputDOB" placeholder="DOB">
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputAddress" class="col-sm-4 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <textarea name="address" class="form-control" id="inputAddress" rows="3">{{ old('address') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-5">
                                <label for="inputProfile" class="col-sm-4 col-form-label">Profile</label>
                                <div class="col-sm-8">
                                    <input type="file" name="profile"
                                        class="form-control  @error('profile') is-invalid @enderror" id="imgInp"
                                        accept="png,jpeg,jpg">
                                    @error('profile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="thumbnail-img">
                                        <img src="#" alt="{{ old('name') }}"
                                            class="img-thumbnail my-4 shadow-sm" id="showImg">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="cmn-btn me-4">Confirm</button>
                            <button type="button" class="cmn-btn bdr-line" onClick="inputClear()">Clear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
