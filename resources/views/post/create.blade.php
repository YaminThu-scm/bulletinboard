@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Create Post</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-3 mb-md-4">
                            <label for="inputTitle" class="col-sm-4 col-form-label">Title</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Title" required>
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <label for="inputDesc" class="col-sm-4 col-form-label">Description</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" id="inputDesc" rows="3" name="description" required></textarea>
                            </div>
                        </div>
                        <button type="submit" class="cmn-btn me-4">Confirm</button>
                        <button type="button" class="cmn-btn bdr-line">Clear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection