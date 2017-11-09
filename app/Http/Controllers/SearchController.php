<?php

namespace App\Http\Controllers;

use App\Model\City;
use App\Model\Sub_area;
use App\User;
use Illuminate\Http\Request;
use Redirect;
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
        $cities = City::all();
        $sub_areas = Sub_area::all();
        $doctors = User::where('city', $city)
    					->where('subarea',$subarea)
    					->where('status','active')
    					->inRandomOrder()
    					->paginate(10);
        $doctorCount = User::where('city', $city)
    					->where('subarea',$subarea)
    					->where('status','active')
    					->count();
        return view('search',compact('doctors','doctorCount','city','subarea','cities','sub_areas'));

    }
}
