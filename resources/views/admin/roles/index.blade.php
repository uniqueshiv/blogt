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
		<div class="row">
			@foreach($roles as $role)
			<div class="card col-md-3 col-xs-6 col-sm-3" >
			  <div class="card-body">
			    <h4 class="card-title">{{$role->display_name}}</h4>
			    <h6 class="card-subtitle mb-2 text-muted">{{$role->name}}</h6>
			    <p class="card-text">{{$role->description}}</p>
			    <a href="{{ route('roles.show',$role->id)}}" class="card-link badge badge-roundless badge-success btn-success">Details</a>
			    <a href="{{route('roles.edit',$role->id)}}" class="card-link badge badge-roundless badge-danger">Edit</a>
			  </div>
			</div>

			@endforeach

		{{$roles->links()}}
	</div>
	</div>
@endsection

@push('css')
	<style type="text/css">
		.card-body{
			box-shadow: 0px 0px 6px #000;
		    padding: 10px;
		    text-align: center;
		    margin-bottom:20px;
		}

	</style>
@endpush