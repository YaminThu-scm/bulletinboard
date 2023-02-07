@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-8 col-lg-5 shadow-sm p-4 p-md-5 mb-5 rounded">
            <h5 class="cmn-ttl mb-4">Update Post</h5>
            <form method="POST" action="{{ route('post.edit.store', $post->id) }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="postId"  id="inputId" value="{{ $post -> id }}">

                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputTitle" class="col-sm-4 col-form-label">Title</label>
                    <div class="col-sm-8">
                        <input type="text" name="title" class="form-control" id="inputTitle" value="{{ $post -> title }}">
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label for="inputDesc" class="col-sm-4 col-form-label">Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="description" id="inputDesc">{{ $post -> description }}</textarea>
                    </div>
                </div>
                <div class="form-group row mb-5">
                    <label for="SwitchChecked" class="col-sm-4 col-form-label">Status</label>
                    <div class="col-sm-8">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="SwitchChecked" checked style="width: 4em;height: 2em;">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-4">Confirm</button>
                <button type="button" class="btn btn-outline-primary">Clear</button>
            </form>
        </div>
    </div>

</div>
@endsection