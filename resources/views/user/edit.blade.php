@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Update User</h5>
                        <div class="profile-img img-height">
                            <img src="{{ asset('storage/' . $user->profile) }}" alt="{{ $user->name }}" class="img-thumbnail"
                                width="50" height="50">
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user.edit.store', $user->id) }}"
                            enctype="multipart/form-data" id="myForm">
                            @csrf
                            <input type="hidden" name="userId" id="inputId" value="{{ $user->id }}">
                            <input type="hidden" name="profile" id="inputProfile" value="{{ $user->profile }}">
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputName" class="col-sm-4 col-form-label">Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="inputName"
                                        placeholder="Name" value="{{ old('name', $user->name) }}">
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
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="inputEmail"
                                        placeholder="Email" value="{{ old('email', $user->email) }}">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputConfirmPassword" class="col-sm-4 col-form-label">Type</label>
                                <div class="col-sm-8">
                                    <select class="form-select" name="type">
                                        <option value="0" @if ($user->type == '0' || old('type') == '0') selected @endif>Admin
                                        </option>
                                        <option value="1" @if ($user->type == '1' || old('type') == '1') selected @endif>User
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputPhoneNo" class="col-sm-4 col-form-label">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" name="phone"
                                        class="form-control @error('phone') is-invalid  @enderror" id="inputPhoneNo"
                                        value="{{ old('phone', $user->phone) }}">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputDOB" class="col-sm-4 col-form-label">Date Of Birth</label>
                                <div class="col-sm-8">
                                    <input type="date" name="dob" class="form-control" id="inputDOB"
                                        placeholder="DOB" value="{{ $user->dob }}">
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputAddress" class="col-sm-4 col-form-label">Address</label>
                                <div class="col-sm-8">
                                    <textarea name="address" class="form-control" id="inputAddress" rows="3">{{ old('address', $user->address) }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputProfile" class="col-sm-4 col-form-label">Profile</label>
                                <div class="col-sm-8">
                                    <input type="file" name="profile"
                                        class="form-control @error('profile') is-invalid @enderror" id="imgInp"
                                        accept="png,jpeg,jpg">
                                    @error('profile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="thumbnail-img">
                                        <img src="{{ asset('storage/' . $user->profile) }}" alt="{{ $user->name }}"
                                            class="img-thumbnail my-4 shadow-sm" id="showImg">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-5">
                                <a href="{{ route('user.change.password') }}" class="d-block">
                                    Change Password
                                </a>
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
