@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="shadow-sm p-4 p-md-5 mb-5 rounded">
            <h5 class="cmn-ttl mb-4">User List</h5>
            <form class="d-flex mb-4">
                <input type="text" class="form-control me-2" placeholder="Name">
                <input type="text" class="form-control me-2" placeholder="Email">
                <input type="text" class="form-control me-2" placeholder="Created From">
                <input type="text" class="form-control me-3" placeholder="Created To">
                <button type="button" class="btn btn-success me-3">Search</button>
                <a href="{{route('user.create')}}" class="btn btn-success me-3">Add</a>
            </form>
            <div class="table-responsive overflow-auto mb-5">
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
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection