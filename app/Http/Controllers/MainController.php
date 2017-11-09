<?php

namespace App\Http\Controllers;

use App\Model\City;
use App\Model\Sub_area;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function welcome()
    {
    	$cities = City::all();
 	$sub_areas = Sub_area::all();
       	$allDoctors = User::where('role','doctor')->where('status','active')->inRandomOrder()->get();        

        	return view('welcome', compact('allDoctors','cities','sub_areas'));
    }
}
