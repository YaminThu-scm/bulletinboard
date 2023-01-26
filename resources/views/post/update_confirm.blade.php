@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-8 col-lg-5 shadow-sm p-4 p-md-5 mb-5 rounded">
            <h5 class="cmn-ttl mb-4">Update Post Confirmation</h5>
            <form>
                <div class="form-group row mb-3 mb-md-4">
                    <label class="col-sm-4">Title</label>
                    <div class="col-sm-8">
                        Post01
                    </div>
                </div>
                <div class="form-group row mb-3 mb-md-4">
                    <label class="col-sm-4">Description</label>
                    <div class="col-sm-8">
                        Update Description for post01
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
                <button type="submit" class="btn btn-primary me-4">Update</button>
                <button type="button" class="btn btn-outline-primary">Cancel</button>
            </form>
        </div>
    </div>

</div>
@endsection