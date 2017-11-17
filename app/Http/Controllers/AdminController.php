<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $TDoctor = User::where('role','doctor')->count();
        $ActDoctor = User::where('status','active')->count();
        $InActDoctor = User::where('status','deactive')->count();
    	return view('admin.dashboard', compact('TDoctor','ActDoctor','InActDoctor'));
    }
    public function alldoctors()
    {
    	$alldoctors = User::where('role','doctor')->get();
    	return view('admin.alldoctors', compact('alldoctors'));
    }
    public function alldoctorsTableview()
    {
    	$alldoctors = User::where('role','doctor')->get();
    	return view('admin.alldoctors-tableview',compact('alldoctors'));
    }
}
