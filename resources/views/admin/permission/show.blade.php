@extends('admin.layout.master')

@section('content')

<h2> Permission Details</h2>

  

     		 {{csrf_field()}}
  
				<label>Name (Display Name)</label>
				{{$permission->display_name}}
				
		

	        <div class="form-group" v-if="permission_options=='basic'">
				<label>Slug</label>
				<div class="input-group">
				
					{{$permission->name}}
				</div>
			</div>


	         <div class="form-group" v-if="permission_options=='basic'">
				<label>Description</label>
				<div class="input-group">
					 {{$permission->description}}
				</div>
			 </div>

      

        <div class="clearfix"></div><br><br>
        
      
    </form>


@endsection
