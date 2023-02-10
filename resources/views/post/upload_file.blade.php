@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Upload CSV File</h5>
                <div class="card-body">
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
    </div>
</div>
@endsection