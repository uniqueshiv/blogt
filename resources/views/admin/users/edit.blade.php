@extends('admin.layout.master')

@section('content')

<div class="col-md-8 ">
<h2>Edit user</h2>

    <form action="{{-- {{route('users.update')}} --}}" method="POST">
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
			<label>Password</label>

			<div class="input-group">
			  <<div class="radio">
			  	<label>
			  		<input type="radio" name="" id="input" value="Keep" checked="checked">
			  		Radio Box
			  	</label>
			  </div>
				<radio value='keep'>Do not change password</radio>
				<radio value='auto'>Auto-Generate new passoword</radio>
				<radio value='manual'>Manual set new password</radio>
			</div>
			
			<input type="password" class="form-control" placeholder="Manually give password" name="password" id="password" :disabled="auto_password">
		</div>

		<div class="form-group">	
			<div class="checkbox-list">
				<input type="checkbox" id="inlineCheckbox1" value="option1" name="autogenerate" :checked="true" v-model="auto_password">
				<label class="checkbox-inline" for="inlineCheckbox1">Auto Generate Password </label>
			</div>
		</div>

        {{-- <div class="column">
          <label for="roles" class="label">Roles:</label>
          <input type="hidden" name="roles" :value="rolesSelected" />

          <b-checkbox-group v-model="rolesSelected">
            @foreach ($roles as $role)
              <div class="field">
                <b-checkbox :custom-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
              </div>
            @endforeach
          </b-checkbox-group>
        </div> --}}

        <div class="form-actions pull-right">
			<button type="button" class="btn default">Cancel</button>
			<button type="submit" class="btn green">Submit</button>
		</div>
      
    </form>

</div>
@endsection
@push('scripts')
<script src="https://unpkg.com/vue"></script>
<script type="text/javascript">
		
		var app=new Vue({
			el:'#app',
			data:{
				auto_password:true
			},
			created:function(){
				//alert('sss')
			}
		})

</script>
@endpush