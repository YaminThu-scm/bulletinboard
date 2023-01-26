@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-8 col-lg-5 shadow-sm p-4 p-md-5 mb-5 rounded">
            <h5 class="cmn-ttl mb-4">Upload CSV File</h5>
            <form>
                <div class="mb-4">
                    <label for="inputFile" class="form-label">Import FIle From:</label>
                    <input type="file" class="form-control" id="inputProfile">
                </div>
                <button type="submit" class="btn btn-primary me-4">Import File</button>
            </form>
        </div>
    </div>

</div>
@endsection