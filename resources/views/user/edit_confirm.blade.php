@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-8 col-lg-5 shadow-sm p-4 p-md-5 mb-5 rounded">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="">Update User Confirmation</h5>
                <div class="">
                    <img src="https://us.123rf.com/450wm/pandavector/pandavector1901/pandavector190105281/pandavector190105281.jpg?ver=6 wid" width="75" height="75" class="img-thumbnail" alt="...">
                </div>
            </div>
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
                        <input type="text" name="type" value="{{old('type')}}" class="form-control" id="inputEmail" required autocomplete autofocus readonly="readonly">
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
                <button type="submit" class="btn btn-primary me-4">Update</button>
                <button type="button" class="btn btn-outline-primary">Cancel</button>
            </form>
        </div>
    </div>

</div>
@endsection