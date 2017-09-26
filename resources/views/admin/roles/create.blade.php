@extends('admin.layout.master')

@section('content')

<div class="container1" id="editpermission">

		<h2>Create New Role</h2>
		<div class="actions pull-right">
			<a href="{{route('roles.index')}}" class="btn btn-circle  btn-default btn-sm">
			<i class="fa fa-home "></i> Go to Roles </a>
		</div>
		<br>
		<hr>
			<h3><b>Role Details</b></h3>
			<form action="{{ route('roles.store')}}" method="post">

				{{ csrf_field()}}
				

				<div class="form-group">
				<label class="control-label"><b>Name (Human Readable)</b></label><br>
					
						<input type="text" name="display_name" class="form-control input-circle" id="display_name">
				
				</div>

				<div class="form-group">
				<label class="control-label" for="name"><b>Slug (Can not be editted )</b></label><br>
						<input type="text" class="form-control input-circle" name="name"   id="name">
				</div>

				<div class="form-group">
				<label class="control-label" for="description"><b>Description </b></label>

						<input type="text" class="form-control input-circle" name="description" id="description">
				</div>
				<div class="clearfix"></div>
				<h3>Permissions</h3>
				{{-- @foreach($roles->permissions as $role)
				<li>{{$role->name}}
				({{$role->display_name}})
				</li>
				@endforeach --}}
				@foreach($permissions as $permission)
					<input type="checkbox" name="{{$permission->name}}" v-model="permission_Selected" id="{{$permission->name}}" value="{{$permission->id}}"> <label for="{{$permission->name}}">{{$permission->display_name}} <em>({{$permission->description}})</em></label><br>
				@endforeach
				<input type="hidden" :value="permission_Selected" name="permissions">
				<button type="submit" class="btn btn-warning">Update Permissions</button>
	</form>
	</div>
@endsection
<script src="{{ URL::asset('js/vue.js') }}"></script>
@push('scripts')
<script type="text/javascript">
	var vue=new Vue({
		el:'#editpermission',
		data:{
			permission_Selected:[],

		}
	})

</script>
@endpush