<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\User;
class SearchController extends Controller
{
    public function index(Request $request)
    {
    	$City = $request->city;
    	$Subarea = $request->subarea;

    	return Redirect::to('search/'.$City.'/'.$Subarea);
    }

    public function search($city,$subarea)
    {
    	$Doctors = User::where('city', $city)
    					->where('subarea',$subarea)
    					->where('status','active')
    					->inRandomOrder()
    					->paginate(10);
    	$doctorCount = User::where('city', $city)
    					->where('subarea',$subarea)
    					->where('status','active')
    					->count();
    	return view('search',compact('Doctors','doctorCount','city','subarea'));

    }
}
