@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User List</div>
                <div class="card-body">
                    <form class="d-flex mb-4">
                        <input type="text" class="form-control me-2" placeholder="Name">
                        <input type="text" class="form-control me-2" placeholder="Email">
                        <input type="text" class="form-control me-2" placeholder="Created From">
                        <input type="text" class="form-control me-3" placeholder="Created To">
                        <a href="#" class="cmn-btn me-3"><i class="fa-solid fa-magnifying-glass me-2"></i>Search</a>
                        <a href="{{route('user.create')}}" class="cmn-btn me-3"><i class="fa-solid fa-circle-plus me-2"></i>Add</a>
                    </form>
                    <div class="user-tbl table-responsive overflow-auto mb-5">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Created User</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Birth Date</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">Updated Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($userList as $user)
                                <tr>
                                    <td><a href="{{ route('user.profile', $user->id) }}">{{ $user -> name }}</a></td>
                                    <td>{{ $user -> email }}</td>
                                    <td>{{ $user -> created_user }}</td>
                                    <td>{{ $user ->phone }}</td>
                                    <td>{{ $user -> dob }}</td>
                                    <td>{{ $user -> address }}</td>
                                    <td>{{ $user -> created_at }}</td>
                                    <td>{{ $user -> updated_at }}</td>
                                    <td>
                                        <a class="delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal" data-attr="{{ route('user.delete', $user->id) }}">
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
                                                        <a class="cmn-btn delete-modal-btn" href="{{ route('user.delete', $user->id) }}">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="navigation">
                        {{ $userList ->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection