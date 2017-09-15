@extends('admin.layout.master')

@section('content')

<div class="container1">
		<h2>{{ $user->name}}</h2>
	

	<a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary pull-right"> <i class="fa fa-plus"></i> Edit User</a>
	<div class="clearfix"></div>
	<br>
	<div class="form-group">
			<label>Name</label>
			<div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-user"></i>
				</span>
				{{$user->name}}
			</div>
		</div>

          <div class="form-group">
			<label>Email</label>
			<div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-envelope"></i>
				</span>
				{{$user->email}}
			</div>
		</div>


        

</div>

@endsection