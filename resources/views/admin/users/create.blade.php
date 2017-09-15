@extends('admin.layout.master')

@section('content')

<div class="col-md-8 ">
<h2>Create a new user</h2>

    <form action="{{route('users.store')}}" method="POST">
      {{csrf_field()}}
    	<div class="form-group">
			<label>Name</label>
			<div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-user"></i>
				</span>
				<input type="text" class="form-control" name="name" placeholder="User Name">
			</div>
		</div>

          <div class="form-group">
			<label>Email</label>
			<div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-envelope"></i>
				</span>
				<input type="email" class="form-control" name='email' placeholder="Email Address">
			</div>
		</div>


         <div class="form-group">
			<label>Password</label>
			<div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-lock fa-fw"></i>
				</span>
				<input type="password" class="form-control" placeholder="Manually give password" name="password" id="password" :disabled="auto_password">
			</div>
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