<?php

namespace App\Http\Controllers;

use App\User;
use App\Hospital;
use App\Model\City;
use App\Model\Sub_area;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function welcome()
    {
    	$cities = City::all();
        $sub_areas = Sub_area::all();
        $hospitals = Hospital::all(); 
       	$allDoctors = User::where('role','doctor')->where('slider1',1)->inRandomOrder()->get();        

        return view('welcome', compact('allDoctors','cities','sub_areas','hospitals'));
    }
}
