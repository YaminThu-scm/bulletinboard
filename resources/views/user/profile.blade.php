@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>User Profile</h5>
                    <a href="{{ route('user.edit', $user->id) }}" class="edit-btn"><i class="fa-solid fa-pen-to-square"></i></a>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row mb-3">
                            <label for="inputName" class="col-sm-4">Name</label>
                            <div class="col-sm-8">
                                <p class="mb-2">{{ $user -> name}}</p>
                                <div class="thumbnail-img">
                                    @if($user-> profile == null )
                                    <img src="{{ asset('storage/404_img.jpg') }}" alt="{{$user -> name}}" class="img-thumbnail my-4 shadow-sm">
                                    @else
                                    <img src="{{ asset('storage/'. $user->profile) }}" alt="{{$user -> name}}" class="img-thumbnail my-4 shadow-sm">
                                    @endif
                                </div>
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
                                {{date('Y/m/d', strtotime($user->dob))}}
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
    </div>
</div>
@endsection
