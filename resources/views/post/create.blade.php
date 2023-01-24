@extends('layouts.app')

@section('content')
<div class="container ">
    <h5 class="cmn-ttl mb-4">Create Post</h5>
    <form>
        <div class="form-group row mb-4">
            <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTitle" placeholder="Title">
            </div>
        </div>
        <div class="form-group row mb-5">
            <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputDesc" rows="3"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary me-4">Confirm</button>
        <button type="button" class="btn btn-outline-primary">Clear</button>
    </form>
</div>
@endsection