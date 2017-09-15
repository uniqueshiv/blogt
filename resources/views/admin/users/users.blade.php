@extends('admin.layout.master')

@section('content')
	<div class="container">
		<h2>Manage Users</h2>
	</div>
	<a href="{{ route('users.create')}}" class="btn btn-primary">Create User</a>
	
	<table class="table table-reponsive">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Created</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->created_at->toFormattedDateString()}}</td>
				<td><a href="{{ route('users.edit',$user->id)}}" class="btn btn-warning">Edit</a></td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endsection