@extends('admin.layout.master')

@section('content')
	<div class="container1">
		<h2>Manage Users</h2>
	
	<a href="{{ route('users.create')}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i> Create User</a>
	<div class="clearfix"></div>
	<br>
	<table class="table table-striped table-bordered table-hover">
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
				<td><a href="{{ route('users.edit',$user->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a></td>
			</tr>
		@endforeach
		</tbody>
	</table>

	{{$users->links()}}
</div>
@endsection