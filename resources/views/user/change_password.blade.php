@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Change Password</h5>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('change.password') }}" id="myForm">
                            @csrf
                            <div class="row form-group mb-md-4{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-sm-5 control-label">Current Password</label>
                                <div class="col-sm-7">
                                    <input id="current-password" type="password"
                                        class="form-control @error('current-password') is-invalid @enderror"
                                        name="current-password" value="{{old('current-password')}}">
                                        @error('current-password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="row form-group mb-md-4{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                <label for="new-password" class="col-sm-5 control-label">New Password</label>
                                <div class="col-sm-7">
                                    <input id="new-password" type="password"
                                        class="form-control @error('new-password') is-invalid @enderror" name="new-password" value="{{ old('new-password')}}"
                                        >
                                    @if ($errors->has('new-password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('new-password') }}</strong>
                                        </span>
                                    @endif

                                </div>
                            </div>
                            <div class="row form-group mb-md-4">
                                <label for="new-password-confirm" class="col-sm-5 control-label">Confirm New
                                    Password</label>
                                <div class="col-sm-7">
                                    <input id="new-password-confirm" type="password" class="form-control @error('new-password_confirmation') is-invalid @enderror"
                                        name="new-password_confirmation" value="{{ old('new-password_confirmation')}}">
                                        @if ($errors->has('new-password_confirmation'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('new-password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="cmn-btn">Change</button>
                            <button type="button" class="cmn-btn bdr-line" onClick="inputClear()">Clear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
