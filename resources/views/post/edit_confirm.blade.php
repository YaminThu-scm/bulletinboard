@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Update Post Confirmation</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('post.edit.save', old('postId')) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-3 mb-md-4">
                            <label class="col-sm-4">Title</label>
                            <div class="col-sm-8">

                                <input type="text" name="title" class="form-control" id="inputTitle" value=" {{old('title')}}" required autocomplete autofocus readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label class="col-sm-4">Description</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" name="description" id="inputDesc" required autocomplete autofocus readonly="readonly"> {{old('description')}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-3 mb-md-4">
                            <label class="col-sm-4">Type</label>
                            <div class="col-sm-8">
                                Update Description for post01
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <label for="SwitchChecked" class="col-sm-4">Status</label>
                            <div class="col-sm-8">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="SwitchChecked" checked style="width: 4em;height: 2em;">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="cmn-btn me-4">Update</button>
                        <button type="button" class="cmn-btn bdr-line">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection