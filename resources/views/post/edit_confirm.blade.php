@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Update Post Confirmation</h5>
                    <div class="card-body">
                        <form method="POST" action="{{ route('post.edit.save', old('postId')) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row mb-3 mb-md-4">
                                <label class="col-sm-4">Title</label>
                                <div class="col-sm-8">
                                    <input type="hidden" name="title" class="form-control" id="inputTitle"
                                        value=" {{ old('title') }}" required autocomplete autofocus readonly="readonly">
                                    <span>{{ old('title') }}</span>
                                </div>
                            </div>
                            <div class="form-group row mb-3 mb-md-4">
                                <label class="col-sm-4">Description</label>
                                <div class="col-sm-8">
                                    <textarea hidden class="form-control" name="description" id="inputDesc" required autocomplete autofocus
                                        readonly="readonly"> {{ old('description') }}</textarea>
                                    <span>{{ old('description') }}</span>
                                </div>
                            </div>
                            <div class="form-group row mb-5">
                                <label for="SwitchChecked" class="col-sm-4">Status</label>
                                <div class="col-sm-8">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input custom-check" type="checkbox" id="SwitchChecked" name="status"
                                            @if (old('status')) checked @endif onclick="return false;">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="cmn-btn me-4">Update</button>
                            <button type="button" class="cmn-btn bdr-line" onclick="goBack()">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
