@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header">Upload CSV File</h5>
                    <div class="card-body">
                        @if (session('error'))
                        <div class="alert alert-danger">
                        {{ session('error') }}
                        </div>
                        @endif
                        <form method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="inputFile" class="form-label">Import FIle From:</label>
                                <input type="file" name="upload-file"
                                    class="form-control @error('upload-file') is-invalid @enderror" id="inputProfile">
                                @error('upload-file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="upload-btn cmn-btn" disabled>Import File</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
