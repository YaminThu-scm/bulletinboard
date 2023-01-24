@extends('layouts.app')

@section('content')
<div class="container w-50">
    <h5 class="cmn-ttl mb-4">Create Post Confirmation</h5>
    <form>
        <div class="form-group row mb-4">
            <label for="inputTitle" class="col-sm-2">Title</label>
            <div class="col-sm-10">
                Post01
            </div>
        </div>
        <div class="form-group row mb-5">
            <label for="inputDesc" class="col-sm-2">Description</label>
            <div class="col-sm-10">
                This is Description for post01.
            </div>
        </div>
        <button type="submit" class="btn btn-primary me-4">Confirm</button>
        <button type="button" class="btn btn-outline-primary">Clear</button>
    </form>
</div>
@endsection