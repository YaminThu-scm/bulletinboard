@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-11 col-md-10 col-lg-10 shadow-sm p-4 p-md-5 mb-5 rounded">
            <h5 class="cmn-ttl mb-4">User List</h5>
            <form class="d-flex mb-4">
                <input type="text" class="form-control me-2" placeholder="Name">
                <input type="text" class="form-control me-2" placeholder="Email">
                <input type="text" class="form-control me-2" placeholder="Created From">
                <input type="text" class="form-control me-3" placeholder="Created To">
                <button type="button" class="btn btn-primary me-3">Search</button>
                <button type="button" class="btn btn-primary me-3">Add</button>
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
                        <tr>
                            <th scope="row">User 1</th>
                            <td>user1@gmail.com</td>
                            <td>User 1</td>
                            <td>0998989898</td>
                            <td>2004/10/05</td>
                            <td>Yangon</td>
                            <td>5/10/2019</td>
                            <td>6/10/2019</td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <th scope="row">User 2</th>
                            <td>user2@gmail.com</td>
                            <td>User 1</td>
                            <td>0998989895</td>
                            <td>2004/06/07</td>
                            <td>Yangon</td>
                            <td>5/10/2019</td>
                            <td>6/10/2019</td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <th scope="row">User 3</th>
                            <td>user3@gmail.com</td>
                            <td>User 1</td>
                            <td>0998989891</td>
                            <td>2003/06/07</td>
                            <td>Yangon</td>
                            <td>5/1/2019</td>
                            <td>6/10/2019</td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <th scope="row">User 4</th>
                            <td>user4@gmail.com</td>
                            <td>User 4</td>
                            <td>0998989899</td>
                            <td>1999/06/07</td>
                            <td>Yangon</td>
                            <td>8/2/2019</td>
                            <td>6/8/2019</td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <th scope="row">User 5</th>
                            <td>user5@gmail.com</td>
                            <td>User 2</td>
                            <td>0998969895</td>
                            <td>1998/06/07</td>
                            <td>Yangon</td>
                            <td>5/08/2019</td>
                            <td>6/12/2019</td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <th scope="row">User 6</th>
                            <td>user6@gmail.com</td>
                            <td>User 2</td>
                            <td>0998969795</td>
                            <td>1993/06/07</td>
                            <td>Yangon</td>
                            <td>6/08/2019</td>
                            <td>1/09/2019</td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <th scope="row">User 7</th>
                            <td>user7@gmail.com</td>
                            <td>User 2</td>
                            <td>0977778883</td>
                            <td>1997/03/13</td>
                            <td>Yangon</td>
                            <td>5/08/2022</td>
                            <td>6/01/2023</td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <nav aria-label="Page navigation example">
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
            </nav>
        </div>
    </div>

</div>
@endsection