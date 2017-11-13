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
        $HospitalAndDoctor = $request->DocORHosName;
        
        if (isset($City) && empty($Subarea) && empty($HospitalAndDoctor)) {
            return Redirect::to('search/'.$City);
        } elseif (isset($City) && isset($Subarea) && empty($HospitalAndDoctor)) {
            return Redirect::to('search/'.$City.'/'.$Subarea);
        } elseif (isset($HospitalAndDoctor)) {
            return "Hosptial search";
        } else {
            return "something Worng";
        }
    }

    public function searchByCity($city)
    {
        $cities = City::all();
        $sub_areas = Sub_area::all();
        $doc_id = City::where('city_name',$city)->first();
        $doctors = City::find($doc_id->id)
                        ->doctors()->where('status','active')
                        ->inRandomOrder()
                        ->paginate(10);
        $doctorCount = City::find($doc_id->id)->doctors->count();
        $subarea = "";
    
        return view('search',compact('doctors','doctorCount','city','subarea','cities','sub_areas'));
    }

    public function searchByCityandSub($city,$subarea)
    {
       $cities = City::all();
        $sub_areas = Sub_area::all();
        $city_id = City::where('city_name',$city)->first();
        $subarea_id = Sub_area::where('name',$subarea)->first();
        $doctors = User::where('city_id', $city_id->id)
                    ->where('sub_area_id',$subarea_id->id)
                    ->where('status','active')
                    ->inRandomOrder()
                    ->paginate(10);
        $doctorCount = $doctors->count();
        return view('search',compact('doctors','doctorCount','city','subarea','cities','sub_areas'));

    }
}
