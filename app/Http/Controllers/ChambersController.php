<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chamber;
use Sentinel;
use App\User;
class ChambersController extends Controller
{
   public function chambers()
   {
      $userId = Sentinel::getUser()->id;
      $chambers = User::find($userId)->chambers;

   	return view('doctor.chambers', compact('chambers'));
   }
   public function api()
   {
      $userId = Sentinel::getUser()->id;
      $chambers = User::find($userId)->chambers;      
      return response(User::find($userId)->chambers);
  
   }

   public function addChamber(Request $request)
   {
       $this->validate($request,[
        'chamberName' => 'required',
        'chamberAddress' => 'required',
        'chamberPhone' => 'required'
       ]);
       
   		$chamberUserId = Sentinel::getUser()->id;

      $chamber = new Chamber;
   		$chamber->user_id = $chamberUserId;
   		$chamber->chamber_name = $request->chamberName;
   		$chamber->chamber_address = $request->chamberAddress;
   		$chamber->chamber_phone = $request->chamberPhone;
   		$chamber->app_day_start = $request->dayStart;
   		$chamber->app_day_end = $request->dayEnd;
   		$chamber->app_time_start = $request->timeStart;
   		$chamber->app_time_end = $request->timeEnd;
      $chamber->new_patient = $request->newPatient;
      $chamber->returning_patient = $request->returningPatient;
      $chamber->followup_report = $request->followupReport;
      $chamber->lat = $request->lat;
      $chamber->lng = $request->lng;
      $chamber->save();
      // session()->flash('message','New Chamber Successfully Added.');
      return response(['message'=>'New Chamber Successfully Added']);
   		 
   }

   public function deleteChamber(Request $request)    
   {
      $chamber = Chamber::find($request->id);
      $chamber->delete();
      return 'done';

   }
}
