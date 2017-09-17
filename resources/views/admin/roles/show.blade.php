@extends('admin.layout.master')

@section('content')

<div class="container1">
		
		<h2>{{$roles->display_name}} <small>({{$roles->display_name}})</small></h2>
		<h5>{{$roles->name}}</h5>
		<div class="actions pull-right">
			<a href="{{route('roles.edit',$roles->id)}}" class="btn btn-circle  btn-default btn-sm">
			<i class="fa fa-edit "></i> Edit </a>
		</div>
		<br>
		<hr>
			<h3>Permisson:</h3>
			@foreach($roles->permissions as $role)
			 	<li>
			   {{$role->display_name}} <i>({{$role->name}})</i>
			  </li>
			   
			@endforeach

	
	</div>
@endsection