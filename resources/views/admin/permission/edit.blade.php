@extends('admin.layout.master')

@section('content')

<h2>Update Permission</h2>

    <form action="{{route('permissions.update',$permission->id)}}" method="POST">

    <br>

     		 {{csrf_field()}}
  
				<label>Name (Display Name)</label>
				<div class="input-group">
					<input type="text" class="form-control col-md-12" name="name"  value="{{$permission->display_name}}" placeholder="" >
				</div>
		

	        <div class="form-group" v-if="permission_options=='basic'">
				<label>Slug</label>
				<div class="input-group">
				
					<input type="text" class="form-control" name='slug' placeholder="" value="{{$permission->name}}">
				</div>
			</div>


	         <div class="form-group" v-if="permission_options=='basic'">
				<label>Description</label>
				<div class="input-group">
					<textarea  class="form-control" placeholder="Describe what the permissions does" name="description" id="description"> {{$permission->description}}</textarea>
				</div>
			 </div>

      

        <div class="clearfix"></div><br><br>
        <div class="form-actions">
			<button type="button" class="btn default">Cancel</button>
			<button type="submit" class="btn green">Submit</button>
		</div>
      
    </form>


@endsection
