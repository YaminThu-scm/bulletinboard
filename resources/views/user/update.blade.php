@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-8 col-lg-5 shadow-sm p-4 p-md-5 mb-5 rounded">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="cmn-ttl">Update User</h5>
                <div class="">
                    <img src="https://us.123rf.com/450wm/pandavector/pandavector1901/pandavector190105281/pandavector190105281.jpg?ver=6 wid" width="75" height="75" class="img-thumbnail" alt="...">
                </div>
            </div>
            <form>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputName" class="col-sm-4 col-form-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputName" placeholder="Name" value="Aung Aung">
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputEmail" class="col-sm-4 col-form-label">Email Address</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email" value="aungaung@gmail.com">
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputConfirmPassword" class="col-sm-4 col-form-label">Type</label>
                    <div class="btn-group col-sm-8">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Type</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputPhoneNo" class="col-sm-4 col-form-label">Phone</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" id="inputPhoneNo" placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputDOB" class="col-sm-4 col-form-label">Date Of Birth</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" id="inputDOB" placeholder="DOB" value="2014-05-12">
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputAddress" class="col-sm-4 col-form-label">Address</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="inputAddress" rows="3">Yangon</textarea>
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
                <button type="submit" class="btn btn-primary me-4">Confirm</button>
                <button type="button" class="btn btn-outline-primary">Clear</button>
            </form>
        </div>
    </div>

</div>
@endsection