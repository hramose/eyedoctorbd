<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function welcome()
    {
        $allDoctors = User::where('role','doctor')->where('status','active')->inRandomOrder()->get();        
        // return view('welcome',compact('allDoctors'));
        return view('welcome', compact('allDoctors'));
        
        // return $allDoctors;
    }
}
