@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-8 col-lg-5 shadow-sm p-4 p-md-5 mb-5 rounded">
            <h5 class="cmn-ttl mb-4">Create Post Confirmation</h5>
            <form>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputTitle" class="col-sm-4">Title</label>
                    <div class="col-sm-8">
                        Post01
                    </div>
                </div>
                <div class="form-group row mb-5">
                    <label for="inputDesc" class="col-sm-4">Description</label>
                    <div class="col-sm-8">
                        This is Description for post01.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-4">Create</button>
                <button type="button" class="btn btn-outline-primary">Cancel</button>
            </form>
        </div>
    </div>

</div>
@endsection