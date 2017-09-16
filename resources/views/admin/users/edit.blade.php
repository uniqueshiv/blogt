@extends('admin.layout.master')

@section('content')

<div class="col-md-8 ">
<h2>Edit user</h2>

    <form action=" {{route('users.update',$user->id)}}" method="POST">
    {{method_field('put')}}
      {{csrf_field()}}
    	<div class="form-group">
			<label>Name</label>
			<div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-user"></i>
				</span>
				<input type="text" class="form-control" name="name" placeholder="User Name" value="{{ $user->name}}">
			</div>
		</div>

          <div class="form-group">
			<label>Email</label>
			<div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-envelope"></i>
				</span>
				<input type="email" class="form-control" name='email' placeholder="Email Address" value="{{$user->email}}">
			</div>
		</div>

			
		<div class="form-group">
		
			
			 <div class="form-group" v-if="password_options=='manual'">
				<label>Password</label>
				<div class="input-group">
					<span class="input-group-addon">
					<i class="fa fa-lock fa-fw"></i>
					</span>
					<input type="password" class="form-control" placeholder="Manually give password" name="password" id="password" >
				</div>
			 </div>


			 <div class="form-group">
				<fieldset >
				<div class="margin-bottom-10">

					<input id="option1" type="radio" data-size="small"  data-on-color="success" data-off-color="danger" name="password_options" value="keep" class="make-switch switch-radio1"  v-model="password_options">
					<label for="option1">Do not change password </label>
				</div>
				<div class="margin-bottom-10">

					<input id="option2" type="radio" data-size="small"  data-on-color="success" data-off-color="danger" name="password_options" value="auto" class="make-switch switch-radio1"  v-model="password_options">
					<label for="option2">Auto-Generate new passoword</label>
				</div>
				<div class="margin-bottom-10">
					
					<input id="option3" type="radio"  data-size="small" data-on-color="success" data-off-color="danger" name="password_options" value="manual" class="make-switch switch-radio1"  v-model="password_options">
					<label for="option3">Manual set the Password </label>
				</div>
				</fieldset>
			</div>
	
	
		</div>


		


        
        <div class="form-actions pull-right">
			<button type="button" class="btn default">Cancel</button>
			<button type="submit" class="btn green">Edit User</button>
		</div>
      
    </form>

</div>
@endsection
@push('css')
<link href="{{ asset('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@push('scripts')
<script src="{{ URL::asset('js/vue.js') }}"></script>
<script type="text/javascript">
		
		var app=new Vue({
			el:'#app',
			data:{
				password_options:'keep'
			},
			created:function(){
				//alert('sss')
			}
		})

</script>
@endpush