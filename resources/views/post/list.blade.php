@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-lg-10 shadow-sm p-4 p-md-5 mb-5 rounded">
            <h5 class="cmn-ttl mb-4">Post List</h5>
            <form class="d-lg-flex flex-wrap mb-4 justify-content-end">
                <div class="me-5 mb-2">
                    <input type="text" class="form-control">
                </div>
                <button type="button" class="btn btn-success me-3 mb-2">Search</button>
                <button type="button" class="btn btn-success me-3 mb-2">Add</button>
                <button type="button" class="btn btn-success me-3 mb-2">Upload</button>
                <button type="button" class="btn btn-success me-3 mb-2">Download</button>
            </form>
            <table class="table table-striped mb-5">
                <thead>
                    <tr>
                        <th scope="col">Post Title</th>
                        <th scope="col">Post Description</th>
                        <th scope="col">Posted User</th>
                        <th scope="col">Posted Date</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $postList as $post)
                        <tr>
                            <th scope="row">{{ $post -> title }}</th>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td><a class="btn btn-warning" href="#">Edit</a></td>
                            <td><a class="btn btn-danger" href="#">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav> -->
        </div>
    </div>

</div>
@endsection