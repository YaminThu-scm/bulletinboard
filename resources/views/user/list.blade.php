@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">User List</div>
                    <div class="card-body">
                        <form action="{{ route('user.list') }}" method="GET" role="search" class="d-flex mb-4">
                            <input type="text" name="searchName" class="form-control me-2"
                                value="{{ request('searchName') }}" placeholder="Name">
                            <input type="text" name="searchEmail" class="form-control me-2"
                                value="{{ request('searchEmail') }}" placeholder="Email">
                            <input type="text" name="searchCreatedFrom" class="form-control me-2"
                                value="{{ request('searchCreatedFrom') }}" placeholder="Created From" onfocus="(this.type='date')"
                                onblur="(this.type='text')">
                            <input type="text" name="searchCreatedTo" class="form-control me-3"
                                value="{{ request('searchCreatedTo') }}" placeholder="Created To" onfocus="(this.type='date')"
                                onblur="(this.type='text')">
                            <button type="submit" class="cmn-btn me-3"><i
                                    class="fa-solid fa-magnifying-glass me-2"></i>Search</button>
                            <a href="{{ route('user.create') }}" class="cmn-btn me-3"><i
                                    class="fa-solid fa-circle-plus me-2"></i>Add</a>
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
                                    @foreach ($userList as $user)
                                        <tr>
                                            <td>
                                                <a data-bs-toggle="modal" data-bs-target="#profileModal{{ $user->id }}">
                                                    <span class="user-name">{{ $user->name }}</span>
                                                </a>
                                                <div class="modal fade" id="profileModal{{ $user->id }}" tabindex="-1"
                                                    aria-labelledby="profileModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5>User Profile</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form>
                                                                    <div class="form-group row mb-3">
                                                                        <label for="inputName" class="col-sm-4">Name</label>
                                                                        <div class="col-sm-8">
                                                                            <p class="mb-2">{{ $user->name }}</p>
                                                                            <div class="thumbnail-img">
                                                                                @if ($user->profile == null)
                                                                                    <img src="{{ asset('storage/404_img.jpg') }}"
                                                                                        alt="{{ $user->name }}"
                                                                                        class="img-thumbnail my-4 shadow-sm">
                                                                                @else
                                                                                    <img src="{{ asset('storage/' . $user->profile) }}"
                                                                                        alt="{{ $user->name }}"
                                                                                        class="img-thumbnail my-4 shadow-sm">
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3 mb-md-4">
                                                                        <label for="inputEmail" class="col-sm-4">Email
                                                                            Address</label>
                                                                        <div class="col-sm-8">
                                                                            {{ $user->email }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3 mb-md-4">
                                                                        <label for="inputConfirmPassword"
                                                                            class="col-sm-4">Type</label>
                                                                        @if ($user->type == '0')
                                                                            <label class="col-sm-8">
                                                                                <i class="profile-text">Admin</i>
                                                                            </label>
                                                                        @else
                                                                            <label class="col-sm-8">
                                                                                <i class="profile-text">User</i>
                                                                            </label>
                                                                        @endif
                                                                    </div>
                                                                    <div class="form-group row mb-3 mb-md-4">
                                                                        <label for="inputPhoneNo"
                                                                            class="col-sm-4">Phone</label>
                                                                        <div class="col-sm-8">
                                                                            {{ $user->phone }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3 mb-md-4">
                                                                        <label for="inputDOB" class="col-sm-4">Date Of
                                                                            Birth</label>
                                                                        <div class="col-sm-8">
                                                                            {{ dob_format_change($user->dob) }}
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row mb-3 mb-md-4">
                                                                        <label for="inputAddress"
                                                                            class="col-sm-4">Address</label>
                                                                        <div class="col-sm-8">
                                                                            {{ $user->address }}
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
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->created_user != null)
                                                    {{ $user->created_user }}
                                                @else
                                                    Unknown
                                                @endif
                                            </td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ dob_format_change($user->dob) }}</td>
                                            <td class="address-col">
                                                @if (strlen($user->address) > 10)
                                                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="{{ $user->address }}">{{ substr($user->address, 0, 10) . '...' }}</span>
                                                @else
                                                    {{ $user->address }}
                                                @endif
                                            </td>
                                            <td>{{ date_format_change($user->created_at) }}</td>
                                            <td>{{ date_format_change($user->updated_at) }}</td>
                                            <td>
                                                <a class="delete-btn" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $user->id }}"
                                                    data-attr="{{ route('user.delete', $user->id) }}">
                                                    <i class="fa-solid fa-trash"></i></a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="deleteModal{{ $user->id }}"
                                                    tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title text-center"> Are you sure want to
                                                                    delete?</h4>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Do you really want to delete these records? This process
                                                                    cannot be undone.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="cmn-btn btn-secondary"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                <a class="cmn-btn delete-modal-btn"
                                                                    href="{{ route('user.delete', $user->id) }}">Delete</a>
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
                        <div class="text-center fw-bold mb-3">Total Users List {{ $userList->total() }}</div>
                        <div class="navigation">
                            {{ $userList->appends(request()->query())->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
