@extends('admin.layout.master')

@section('content')
	<div class="container1">
		<h2>Manage Permissons</h2>
	
	<div class="actions pull-right">
		
		<a href="{{route('permissions.create')}}" class="btn btn-circle btn-default btn-sm">
		<i class="fa fa-plus"></i> Add </a>
	</div>

	
	<div class="clearfix"></div>
	<br>
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Slug</th>
				<th>Description</th>
				<th>Date</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach($permissions as $permission)
			<tr>
				<td>{{$permission->id}}</td>
				<td>{{$permission->display_name}}</td>
				<td>{{$permission->name}}</td>
				<td>{{$permission->description}}
				<td>{{$permission->created_at->toFormattedDateString()}}</td>
				<td><a href="{{ route('permissions.edit',$permission->id)}}" class="btn btn-circle btn-default btn-sm">
		<i class="fa fa-pencil"></i> Edit </a>
		<a href="{{ route('permissions.show',$permission->id)}}" class="btn btn-circle btn-success btn-sm">
		<i class="fa fa-eye"></i> Show </a></td>
			</tr>
		@endforeach
		</tbody>
	</table>

	{{$permissions->links()}}
</div>
@endsection