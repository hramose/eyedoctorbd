<?php

namespace App\Http\Controllers;

use App\User;
use Sentinel;
use App\Chamber;
use Illuminate\Http\Request;

class ChamberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Sentinel::getUser()->id;
        $chambers = User::find($userId)->chambers;

   	    return view('doctor.chamber.index', compact('chambers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.chamber.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return redirect(route('chamber.index'))->with('successMsg','New Chamber Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chamber::find($id)->delete();
        return redirect(route('chamber.index'))->with('successMsg','Chamber Successfully Deleted');   
    }
}
