<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageController extends Controller
{

	public function index(){
		//return view('admin/layout.admin');
		return redirect()->route('admin.manage.dashboard');
	}

    public function dashboard(){
    	return view('admin.manage.dashboard');
    }
}
