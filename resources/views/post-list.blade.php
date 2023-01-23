@extends('layouts.app')

@section('content')
<div class="container w-50">
    <h5 class="cmn-ttl mb-4">Post List</h5>
	<form>
		<div class="row">
			<div class="col">
				<input type="text" class="form-control">
			</div>
			<div class="col">
				<button type="button" class="btn btn-success">Search</button>
				<button type="button" class="btn btn-success">Add</button>
				<button type="button" class="btn btn-success">Upload</button>
				<button type="button" class="btn btn-success">Download</button>
			</div>
		</div>
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
			<tr>
			<th scope="row">Title 1</th>
			<td>Description 1</td>
			<td>User 1</td>
			<td>5/10/2019</td>
			<td><a href="#">Edit</a></td>
			<td><a href="#">Delete</a></td>
			</tr>
			<tr>
			<th scope="row">Title 2</th>
			<td>Description 2</td>
			<td>User 2</td>
			<td>5/10/2019</td>
			<td><a href="#">Edit</a></td>
			<td><a href="#">Delete</a></td>
			</tr>
			<tr>
			<th scope="row">Title 3</th>
			<td>Description 3</td>
			<td>User 3</td>
			<td>5/10/2019</td>
			<td><a href="#">Edit</a></td>
			<td><a href="#">Delete</a></td>
			</tr>
			<tr>
			<th scope="row">Title 4</th>
			<td>Description 4</td>
			<td>User 4</td>
			<td>5/10/2019</td>
			<td><a href="#">Edit</a></td>
			<td><a href="#">Delete</a></td>
			</tr>
			<tr>
			<th scope="row">Title 5</th>
			<td>Description 5</td>
			<td>User 5</td>
			<td>5/10/2019</td>
			<td><a href="#">Edit</a></td>
			<td><a href="#">Delete</a></td>
			</tr>
			<tr>
			<th scope="row">Title 6</th>
			<td>Description 6</td>
			<td>User 6</td>
			<td>5/10/2019</td>
			<td><a href="#">Edit</a></td>
			<td><a href="#">Delete</a></td>
			</tr>
			<tr>
			<th scope="row">Title 7</th>
			<td>Description 7</td>
			<td>User 7</td>
			<td>5/10/2019</td>
			<td><a href="#">Edit</a></td>
			<td><a href="#">Delete</a></td>
			</tr>
		</tbody>
	</table>
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
@endsection
