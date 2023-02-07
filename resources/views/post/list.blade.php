@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Post List</h5>
                <div class="card-body">
                    <form class="d-lg-flex flex-wrap mb-4 justify-content-end">
                        <div class="me-5 mb-2">
                            <input type="text" class="form-control">
                        </div>
                        <a href="#" class="cmn-btn me-3 mb-2"><i class="fa-solid fa-magnifying-glass me-2"></i>Search</a>
                        <a href="{{route('post.create')}}" class="cmn-btn me-3 mb-2"><i class="fa-solid fa-circle-plus me-2"></i>Add</a>
                        <a href="#" class="cmn-btn me-3 mb-2"><i class="fa-solid fa-upload me-2"></i>Upload</a>
                        <a href="#" class="cmn-btn me-3 mb-2"><i class="fa-solid fa-download me-2"></i>Download</a>
                    </form>
                    <table class="table table-striped table-hover mb-5 p-4 p-md-5 mb-5 ">
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
                                <td>{{ $post -> title }}</th>
                                <td>{{ $post->description }}</td>
                                <td>{{ $post->user->name }}</td>
                                <td>{{ $post->created_at }}</td>
                                <td><a class="edit-btn" href="{{ route('post.edit', $post->id) }}">
                                        <i class="fa-solid fa-pen-to-square"></i></a></td>
                                <td><a class="delete-btn" href="{{ route('post.delete', $post->id) }}">
                                        <i class="fa-solid fa-trash"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="navigation">
                        {{ $postList->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection