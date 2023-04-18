@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Post List</h5>
                    <div class="card-body">
                        <form action="{{ route('post.list') }}" method="GET" role="search"
                            class="d-lg-flex flex-wrap mb-4 justify-content-end">
                            <div class="me-5 mb-2">
                                <input type="text" name="searchKey" class="form-control"
                                    value="{{ request('searchKey') }}">
                            </div>
                            <button type="submit" class="cmn-btn me-3 mb-2"><i
                                    class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                            <a href="{{ route('post.create') }}" class="cmn-btn me-3 mb-2"><i
                                    class="fa-solid fa-circle-plus me-2"></i>Add</a>
                            <a href="{{ route('upload.file') }}" class="cmn-btn me-3 mb-2"><i
                                    class="fa-solid fa-upload me-2"></i>Upload</a>
                            <a href="{{ route('post.download') }}" class="cmn-btn me-3 mb-2"><i
                                    class="fa-solid fa-download me-2"></i>Download</a>
                        </form>
                        <div class="post-tbl table-responsive overflow-auto mb-5">
                            @if ($postList->count() != 0)
                                <table class="table table-striped  table-hover mb-5 p-4 p-md-5 mb-5 ">
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
                                        @foreach ($postList as $post)
                                            <tr>
                                                <td>
                                                    <a class="post-item" data-bs-toggle="modal"
                                                        data-bs-target="#postModal{{ $post->id }}">
                                                        <span>
                                                            @if ($post->status == '0')
                                                                <span class="status draft">#Draft</span>
                                                            @else
                                                                <span class="status">#Active</span>
                                                            @endif
                                                        </span>
                                                        <span class="post-ttl">{{ $post->title }}
                                                        </span>
                                                    </a>
                                                    <div class="modal fade" id="postModal{{ $post->id }}" tabindex="-1"
                                                        aria-labelledby="postModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5>Post Detail</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <div class="form-group row mb-3">
                                                                            <label for="inputName" class="col-sm-4">Post
                                                                                Title</label>
                                                                            <div class="col-sm-8">
                                                                                <p class="mb-2">{{ $post->title }}</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-3">
                                                                            <label for="inputName" class="col-sm-4">Post
                                                                                Description</label>
                                                                            <div class="col-sm-8">
                                                                                <p class="mb-2">{{ $post->description }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-3">
                                                                            <label for="inputName" class="col-sm-4">Post
                                                                                Status</label>
                                                                            <div class="col-sm-8">
                                                                                @if ($post->status == 1)
                                                                                    <span>Active</span>
                                                                                @else
                                                                                    <span>Draft</span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-3">
                                                                            <label for="inputName" class="col-sm-4">Post
                                                                                Created Date</label>
                                                                            <div class="col-sm-8">
                                                                                <p class="mb-2">
                                                                                    {{ date_format_change($post->created_at) }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-3">
                                                                            <label for="inputName" class="col-sm-4">Posted
                                                                                User</label>
                                                                            <div class="col-sm-8">
                                                                                <p class="mb-2">
                                                                                    @if (isset($post->user) && isset($post->user->name))
                                                                                        {{ $post->user->name }}
                                                                                    @else
                                                                                        UNKNOWN USER
                                                                                    @endif
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-3">
                                                                            <label for="inputName" class="col-sm-4">Post
                                                                                Updated Date</label>
                                                                            <div class="col-sm-8">
                                                                                <p class="mb-2">
                                                                                    {{ date_format_change($post->updated_at) }}
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row mb-3">
                                                                            <label for="inputName" class="col-sm-4">Post
                                                                                Updated User</label>
                                                                            <div class="col-sm-8">
                                                                                <p class="mb-2">
                                                                                    @if (isset($post->updated_user) && isset($post->updated_user->name))
                                                                                        {{ $post->updated_user->name }}
                                                                                    @else
                                                                                        UNKNOWN USER
                                                                                    @endif

                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="cmn-btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <td>{{ $post->description }}</td>
                                                <td>
                                                    @if (isset($post->user) && isset($post->user->name))
                                                        {{ $post->user->name }}
                                                    @else
                                                        UNKNOWN USER
                                                    @endif
                                                </td>
                                                <td>{{ date_format_change($post->created_at) }}</td>
                                                <td><a class="edit-btn" href="{{ route('post.edit', $post->id) }}">
                                                        <i class="fa-solid fa-pen-to-square"></i></a></td>
                                                <td>
                                                    <a class="delete-btn" data-bs-toggle="modal"
                                                        data-bs-target="#deleteModal{{ $post->id }}"
                                                        data-attr="{{ route('post.delete', $post->id) }}">
                                                        <i class="fa-solid fa-trash"></i></a>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteModal{{ $post->id }}"
                                                        tabindex="-1" aria-labelledby="deleteModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title text-center"> Are you sure want
                                                                        to
                                                                        delete?</h4>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Do you really want to delete these records? This
                                                                        process
                                                                        cannot be undone.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="cmn-btn btn-secondary"
                                                                        data-bs-dismiss="modal">Cancel</button>
                                                                    <a class="cmn-btn delete-modal-btn"
                                                                        href="{{ route('post.delete', $post->id) }}">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <div class="alert alert-info">There is no posts to show.</div>
                            @endif
                        </div>
                        <div class="text-center fw-bold mb-3">Total Posts List {{ $postList->total() }}</div>
                        <div class="navigation">
                            {{ $postList->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
