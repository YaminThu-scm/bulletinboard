@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header">Post List</h5>
                <div class="card-body">
                    <form action="{{ route('post.list') }}" method="GET" role="search" class="d-lg-flex flex-wrap mb-4 justify-content-end">
                        <div class="me-5 mb-2">
                            <input type="text" name="searchKey" class="form-control" value="{{request('searchKey')}}">
                        </div>
                        <button type="submit" class="cmn-btn me-3 mb-2"><i class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                        <a href="{{route('post.create')}}" class="cmn-btn me-3 mb-2"><i class="fa-solid fa-circle-plus me-2"></i>Add</a>
                        <a href="#" class="cmn-btn me-3 mb-2"><i class="fa-solid fa-upload me-2"></i>Upload</a>
                        <a href="#" class="cmn-btn me-3 mb-2"><i class="fa-solid fa-download me-2"></i>Download</a>
                    </form>
                    <table class="post-tbl table table-striped table-hover mb-5 p-4 p-md-5 mb-5 ">
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
                                <td>
                                    <a class="delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-attr="{{ route('post.delete', $post->id) }}">
                                        <i class="fa-solid fa-trash"></i></a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-center"> Are you sure want to delete?</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="cmn-btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <a class="cmn-btn delete-modal-btn" href="{{ route('post.delete', $post->id) }}">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="navigation">
                        {{ $postList->appends(request()->query())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
