@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Create Post Confirmation</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('post.create.confirm') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-3 mb-md-4">
                                <label for="inputTitle" class="col-sm-4">Title</label>
                                <div class="col-sm-8">
                                    <input type="hidden" class="form-control" id="inputTitle" name="title"
                                        placeholder="Title" value="{{ old('title') }}">
                                    <span>{{ old('title') }}</span>
                                </div>
                            </div>
                            <div class="form-group row mb-5">
                                <label for="inputDesc" class="col-sm-4">Description</label>
                                <div class="col-sm-8">
                                    <textarea hidden class="form-control" id="inputDesc" rows="3" name="description" required autocomplete autofocus
                                        readonly="readonly">{{ old('description') }}</textarea>
                                    <span>{{ old('description') }}</span>
                                </div>
                            </div>
                            <button type="submit" class="cmn-btn me-4">Create</button>
                            <button type="button" class="cmn-btn bdr-line" onclick="goBack()">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
