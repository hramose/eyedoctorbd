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

   public function addChamber(Request $request)
   {
       $this->validate($request,[
        'txt_chamberName' => 'required',
        'txt_chamberAddress' => 'required',
        'txt_chamberPhone' => 'required'
       ]);
       
   		$chamberUserId = Sentinel::getUser()->id;

   		$appDay = $request->opt_day1." TO ".$request->opt_day2;
      $appTime = $request->txt_time1."". $request->opt_AP1." TO ".$request->txt_time2."".$request->opt_AP2;
   		
      $chamber = new Chamber;
   		$chamber->user_id = $chamberUserId;
   		$chamber->chamber_name = $request->txt_chamberName;
   		$chamber->chamber_address = $request->txt_chamberAddress;
   		$chamber->chamber_phone = $request->txt_chamberPhone;
   		$chamber->app_day = $appDay;
   		$chamber->app_time = $appTime;
      $chamber->new_patient = $request->txt_newPatient;
      $chamber->returning_patient = $request->txt_returningPatient;
      $chamber->followup_report = $request->txt_followupReport;
      $chamber->save();
      session()->flash('message','New Chamber Successfully Added.');
      return redirect()->back();
   		
   }

   public function deleteChamber($id)    
   {
      $chamber = Chamber::find($id);
      $chamber->delete();
      session()->flash('message','Chamber Successfully Deleted.');
      return redirect()->back();

   }
}
