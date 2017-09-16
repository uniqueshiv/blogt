@extends('admin.layout.master')

@section('content')
	<div class="container1">
		<h2>Manage Roles</h2>
	
		<div class="actions pull-right">
			
			<a href="{{route('roles.create')}}" class="btn btn-circle btn-default btn-sm">
			<i class="fa fa-plus"></i> Add </a>
		</div>

		
		<div class="clearfix"></div>
		<br>
		
			@foreach($roles as $role)
			<div class="card col-md-3" >
			  <div class="card-body">
			    <h4 class="card-title">{{$role->display_name}}</h4>
			    <h6 class="card-subtitle mb-2 text-muted">{{$role->name}}</h6>
			    <p class="card-text">{{$role->description}}</p>
			    <a href="{{ route('roles.show',$role->id)}}" class="card-link btn btn-success">Details</a>
			    <a href="{{route('roles.edit',$role->id)}}" class="card-link">Edit</a>
			  </div>
			</div>

			@endforeach

		
		
	</div>
@endsection