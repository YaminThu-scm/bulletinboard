@extends('layouts.app')

@section('content')
<div class="container w-50">
    < <div class="d-flex justify-content-between mb-5">
        <h5 class="cmn-ttl mb-4">Update User Confirmation</h5>
        <div class="">
            <img src="https://us.123rf.com/450wm/pandavector/pandavector1901/pandavector190105281/pandavector190105281.jpg?ver=6 wid" width="150" height="150" class="img-thumbnail" alt="...">
        </div>
</div>
<form>
    <div class="form-group row mb-4">
        <label class="col-sm-2">Name</label>
        <div class="col-sm-10">
            Aung Aung
        </div>
    </div>
    <div class="form-group row mb-4">
        <label class="col-sm-2">Email Address</label>
        <div class="col-sm-10">
            aungaung@gmail.com
        </div>
    </div>
    <button type="submit" class="btn btn-primary me-4">Confirm</button>
    <button type="button" class="btn btn-outline-primary">Clear</button>
</form>
</div>
@endsection