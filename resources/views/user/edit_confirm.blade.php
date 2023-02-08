@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center mb-4">
                    <h5 class="">Update User Confirmation</h5>
                    <div class="profile-img img-height">
                        <img src="{{ asset('storage/'. old('profile')) }}" alt="{{ old('name') }}" class="img-thumbnail" width="50" height="50">
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('user.edit.save', old('userId')) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-3 mb-md-4">
                            <label class="col-sm-4">Name</label>
                            <div class="col-sm-8">
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputName" required autocomplete autofocus readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label class="col-sm-4">Email Address</label>
                            <div class="col-sm-8">
                                <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail" required autocomplete autofocus readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label class="col-sm-4">Type</label>
                            <div class="col-sm-8">
                                <input type="text" name="type" value="@if(old('type') == '0') Admin @else User @endif" class="form-control" id="inputEmail" required autocomplete autofocus readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label class="col-sm-4">Phone</label>
                            <div class="col-sm-8">
                                <input type="number" name="phone" value="{{ old('phone') }}" class="form-control" id="inputPhoneNo" autocomplete autofocus readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label class="col-sm-4">Date Of Birth</label>
                            <div class="col-sm-8">
                                <input type="date" name="dob" class="form-control" id="inputDOB" value="{{ old('dob') }}" autocomplete autofocus readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label class="col-sm-4">Address</label>
                            <div class="col-sm-8">
                                <textarea name="address" class="form-control" id="inputAddress" rows="3" autocomplete autofocus readonly="readonly">{{ old('address') }}</textarea>
                            </div>
                        </div>
                        <button type="submit" class="cmn-btn">Update</button>
                        <button type="button" class="cmn-btn bdr-line">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection