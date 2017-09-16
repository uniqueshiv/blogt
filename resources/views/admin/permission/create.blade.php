@extends('admin.layout.master')

@section('content')

<h2>Create a new Permission</h2>

    <form action="{{route('permissions.store')}}" method="POST">

    <br>
    <div class="row">
		<div class="margin-bottom-10 col-md-2">
			<input id="option1" type="radio" data-size="small"  data-on-color="success" data-off-color="danger" name="permission_options" value="basic" class="make-switch switch-radio1"  v-model="permission_options">
			<label for="option1">Basic Permission </label>
		</div>
		<div class="margin-bottom-10 col-md-2">

			<input id="option2" type="radio" data-size="small"  data-on-color="success" data-off-color="danger" name="permission_options" value="crud" class="make-switch switch-radio1"  v-model="permission_options">
			<label for="option2">CRUD Permission</label>
		</div>
    </div><br>



      {{csrf_field()}}
  
	    	<div class="form-group" v-if="permission_options=='basic'" >
				<label>Name (Display Name)</label>
				<div class="input-group">
					<input type="text" class="form-control col-md-12" name="display_name" placeholder="" >
				</div>
			</div>

	        <div class="form-group" v-if="permission_options=='basic'">
				<label>Slug</label>
				<div class="input-group">
				
					<input type="text" class="form-control" name='slug' placeholder="">
				</div>
			</div>


	         <div class="form-group" v-if="permission_options=='basic'">
				<label>Description</label>
				<div class="input-group">
					<textarea  class="form-control" placeholder="Describe what the permissions does" name="description" id="description"></textarea>
				</div>
			 </div>

      	<div class="clearfix"></div>

		<div  v-if="permission_options=='crud'" class="col-md-6" >
			<div class="form-group">
				<label><b>Resource</b></label>
				<div class="input-group">
					<input type="text" class="form-control" name='slug' placeholder="The name of the resource" v-model="resource">
				</div>
			</div>


		<div class="checkbox-list">
			<label>
			<input type="checkbox" value="create" v-model="crudSelected"> Create  </label>
			<label>
			<input type="checkbox" value="read" v-model="crudSelected" > Read </label>
			<label>
			<input type="checkbox" value="update" v-model="crudSelected"> Update </label>
			<label>
			<input type="checkbox" value="delete" v-model="crudSelected"> Delete </label>
		</div>


		</div>
	    <div class="col-md-6">
		 <input type="hidden" name="crud_selected" :value="crudSelected">
 
             <div class="column">
               <table class="table" v-if="resource.length >= 3">
                 <thead>
                   <th>Name</th>
                   <th>Slug</th>
                   <th>Description</th>
                </thead>
                 <tbody>
                   <tr v-for="item in crudSelected">
                     <td v-text="crudName(item)"></td>
                     <td v-text="crudSlug(item)"></td>
                     <td v-text="crudDescription(item)"></td>
                   </tr>
                 </tbody>
               </table>

			</div>
		</div>

        <div class="clearfix"></div><br><br>
        <div class="form-actions">
			<button type="button" class="btn default">Cancel</button>
			<button type="submit" class="btn green">Submit</button>
		</div>
      
    </form>


@endsection
@push('css')
<link href="{{ asset('global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css"/>
@endpush
@push('scripts')
<script src="{{ asset('js/vue.js')}}"></script>
<script type="text/javascript">
		
		var app=new Vue({
			el:'#app',
			data:{
				permission_options:'basic',
				resource:'',
				crudSelected:['create','read','update','delete']
			},
			created:function(){
				//alert('sss')
			},
			methods:{
				crudName:function(item){
					return item.substr(0,1).toUpperCase()+item.substr(1)+" "+app.resource.substr(0,1).toUpperCase()+app.resource.substr(1);

				},

				crudSlug: function(item) {
         			return item.toLowerCase() + "-" + app.resource.toLowerCase();
       			},

       			crudDescription: function(item) {
          			return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
      			}
			}
		})

</script>
@endpush