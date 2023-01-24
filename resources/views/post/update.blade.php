@extends('layouts.app')

@section('content')
<div class="container w-50">
    <h5 class="cmn-ttl mb-4">Update Post</h5>
    <form>
        <div class="form-group row mb-4">
            <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputTitle" value="Post 1">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="inputDesc" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="inputDesc">Description for post 1</textarea>
            </div>
        </div>
        <div class="form-group row mb-5">
            <label for="SwitchChecked" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="SwitchChecked" checked style="width: 4em;height: 2em;">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary me-4">Confirm</button>
        <button type="button" class="btn btn-outline-primary">Clear</button>
    </form>
</div>
@endsection