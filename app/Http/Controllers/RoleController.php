<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use Session;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::orderBy('id','desc')->paginate(10);
        return view('admin.roles.index')->withRoles($roles);
    }

    /*10
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions=Permission::all();
        return view('admin.roles.create')->withPermissions($permissions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'display_name'=>'required|max:255',
            'name'        =>'required|max:100|alpha_dash|unique:permissions,name',
            'description'=>'required|max:255'
            ]);

         $role=new Role();
         $role->display_name=$request->display_name;
         $role->name=$request->name;
         $role->description=$request->description;
         $role->save();

         if($request->permissions){
            $role->syncPermissions(explode(',',$request->permissions));
          }
          Session::flash('message','New Role Successfully has been created');
          return redirect()->route('roles.show',$role->id);
    }
    /*
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roles=Role::findOrFail($id);
        return view('admin.roles.show')->withRoles($roles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
       $roles=Role::where('id',$id)->with('permissions')->first();
       $permissions=Permission::all();
       //dd([$permissions,$roles]);
       return view('admin.roles.edit')->withRoles($roles)->withPermissions($permissions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'display_name'=>'required|max:255',
            'description' =>'sometimes|max:255'
        ]);

        $role=Role::findOrFail($id);
        $role->display_name=$request->display_name;
        $role->description=$request->description;
        $role->save();

        if($request->permissions){
            $role->syncPermissions(explode(',',$request->permissions));
        }
        $request->session()->flash('key', 'Successfully updated the '.$role->display_name.' role in the db');
        return redirect()->route('roles.show',$id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
