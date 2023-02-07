@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Change Password</h5>
                <div class="card-body">
                    <form>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputName" class="col-sm-5">Old Password</label>
                            <div class="col-sm-7">
                                **********
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputEmail" class="col-sm-5">New Password</label>
                            <div class="col-sm-7">
                                *********
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputPassword" class="col-sm-5">Confirm New Password</label>
                            <div class="col-sm-7">
                                *********
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary me-4">Change</button>
                        <button type="button" class="btn btn-outline-primary">Clear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection