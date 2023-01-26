@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-8 col-lg-5 shadow-sm p-4 p-md-5 mb-5 rounded">
            <form>
                <div class="d-flex justify-content-between mb-5">
                    <h5 class="cmn-ttl">User Profile</h5>
                    <a href="#">Edit</a>
                </div>
                <div class="form-group row mb-3">
                    <label for="inputName" class="col-sm-4">Name</label>
                    <div class="col-sm-8">
                        <p class="mb-2">User01</p>
                        <img src="https://us.123rf.com/450wm/pandavector/pandavector1901/pandavector190105281/pandavector190105281.jpg?ver=6 wid" width="150" height="150" class="img-thumbnail" alt="...">
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputEmail" class="col-sm-4">Email Address</label>
                    <div class="col-sm-8">
                        user01@gmail.com
                    </div>
                </div>

                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputConfirmPassword" class="col-sm-4">Type</label>
                    <div class="btn-group col-sm-10">
                        User
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputPhoneNo" class="col-sm-4">Phone</label>
                    <div class="col-sm-8">
                        09989898989
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputDOB" class="col-sm-4">Date Of Birth</label>
                    <div class="col-sm-8">
                        2004/10/05
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputAddress" class="col-sm-4">Address</label>
                    <div class="col-sm-8">
                        Yangon
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection