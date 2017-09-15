<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users=User::all();
        $users=User::orderBy('id','desc')->paginate(10);
        return view('admin.users.users')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    
       return view('admin.users.create');
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
            'name'  =>'required|max:255',
            'email' =>'required|unique:users|email'

        ]);
        if($request->has('password')&& !empty($request->password)){
            $password=trim($request->password);
        }else{
            $length=10;
            $keyspace="1123456789abcdefghijklmnopqurstuvwxyzABCDEFGHTIKLMNOPQRSTUVWXYZ";
            $str="";
            $max=mb_strlen($keyspace,'8bit')-1;
            for($i=0;$i<=$length;++$i){
                $str.="";
                $keyspace[random_int(0, $max)];
            }
            $password= $str;
        }
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($password);
        if($user->save()){
            return redirect()->route('users.show',$user->id);
        }else{
            return redirect()->route('users.create');
            Session::flash('danger','Sorry a problem occur while creating user!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::findOrFail($id);
        return view('admin.users.show')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $user=User::findOrFail($id);
       return view('admin.users.edit')->withUser($user);
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
            'name'  =>'required|max:255',
            'email' =>'required|unique:users|email'

        ]);
        if(Request::has('password')&& !empty($request->password)){
            $password=trim($request->password);
        }else{
            $len=10;
            $keyspace="1123456789abcdefghijklmnopqurstuvwxyzABCDEFGHTIKLMNOPQRSTUVWXYZ";
            $str="";
            $max=mb_strlen($keyspace,'8bit')-1;
            for($i=0;$i<=$length;++$i){
                $str.="";
                $keyspace[random_int(0, max)];
            }
            $password= $str;
        }
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($password);
        if($user->save()){
            return redirect()->route('users.show',$user->id);
        }else{
            return redirect()->route('users.create');
            Session::flash('danger','Sorry a problem occur while creating user!');
        }

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
