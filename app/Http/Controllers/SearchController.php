<?php

namespace App\Http\Controllers;

use App\User;
use Redirect;
use App\Hospital;
use App\Model\City;
use App\Model\Sub_area;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
    	$City = $request->city;
        $Subarea = $request->subarea;
        $Hospital = $request->hospital;
        
        if (isset($City) && empty($Subarea) && empty($Hospital)) {
            return Redirect::to('search/'.$City);
        } elseif (isset($City) && isset($Subarea) && empty($Hospital)) {
            return Redirect::to('search/'.$City.'/'.$Subarea);
        } elseif (isset($Hospital)) {
            return Redirect::to('hospital_search/'.$Hospital);
        } else {
            return "something Worng";
        }
    }

    public function searchByCity($city)
    {
        $citySlug  = $city;
        $subareaSlug = "";
        $hospitalSlug = "";
        $cities = City::all();
        $sub_areas = Sub_area::all();
        $hospitals = Hospital::all();        
        $doc_id = City::where('slug',$citySlug)->first();
        $doctors = City::find($doc_id->id)
                        ->doctors()->where('status','active')
                        ->inRandomOrder()
                        ->paginate(12);
        $doctorCount = City::find($doc_id->id)->doctors->count();
    
        return view('search',compact('citySlug','subareaSlug','hospitalSlug','cities','sub_areas','hospitals','doctors','doctorCount'));
    }

    public function searchByCityandSub($city,$subarea)
    {
        $citySlug = $city;
        $subareaSlug = $subarea;
        $hospitalSlug = "";        
        $cities = City::all();
        $sub_areas = Sub_area::all();
        $hospitals = Hospital::all();        
        $city_id = City::where('slug',$citySlug)->first();
        $subarea_id = Sub_area::where('slug',$subareaSlug)->first();
        $doctors = User::where('city_id', $city_id->id)
                    ->where('sub_area_id',$subarea_id->id)
                    ->where('status','active')
                    ->inRandomOrder()
                    ->paginate(12);
        $doctorCount = $doctors->count();
        return view('search',compact('citySlug','subareaSlug','hospitalSlug','cities','sub_areas','hospitals','doctors','doctorCount'));

    }

     public function searchByHospital($slug)
    {
        $citySlug = "";
        $subareaSlug = "";
        $hospitalSlug = $slug;
        $cities = City::all();
        $sub_areas = Sub_area::all();
        $hospitals = Hospital::all();
        $hospital = Hospital::where('slug', $hospitalSlug)->first();
        $doctors = User::where('hospital_id', $hospital->id)
                    ->where('status','active')
                    ->inRandomOrder()
                    ->paginate(12);
        $doctorCount = $doctors->count();
        return view('search',compact('citySlug','subareaSlug','hospitalSlug','cities','sub_areas','hospitals','doctors','doctorCount'));

    }
}
