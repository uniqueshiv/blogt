@extends('admin.layout.master')

@section('content')

<div class="container1">
		
		<h2>Edit {{$roles->display_name}}</h2>
		<div class="actions pull-right">
			<a href="{{route('roles.edit',$roles->id)}}" class="btn btn-circle  btn-default btn-sm">
			<i class="fa fa-edit "></i> Edit </a>
		</div>
		<br>
		<hr>
			<h3>Role Details:</h3>
			<form action="{{ route('roles.update',$roles->id)}}" method="post">

				{{ csrf_field()}}
				{{ method_field('PUT')}}

				<div class="form-group">
				<label class="col-md-3 control-label">Name (Human Readable)</label>
					<div class="col-md-4">
						<input type="text" name="display_name" class="form-control input-circle" value="{{$roles->display_name}}" id="display_name">
						
					</div>
				</div>

				<div class="form-group">
				<label class="col-md-3 control-label" for="name">Slug (Can not be editted)</label>
					<div class="col-md-4">
						<input type="text" class="form-control input-circle" name="name" disabled value="{{$roles->name}}" id="name">
						
					</div>
				</div>

				<div class="form-group">
				<label class="col-md-3 control-label" for="description">Description </label>
					<div class="col-md-4">
						<input type="text" class="form-control input-circle" name="description" id="description" value="{{$roles->display_name}}">
						
					</div>
				</div>

				<h3>Permissions</h3>
				@foreach($roles->permissions as $role)
				<li>{{$role->name}}
				({{$role->display_name}})
				</li>
				@endforeach
	
	</div>
@endsection