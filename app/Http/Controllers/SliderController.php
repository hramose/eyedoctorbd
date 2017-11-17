<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alldoctors = User::where('role','doctor')->get();
        return view('admin.slider.index',compact('alldoctors'));
    }

    public function actionSlider1($id)
    {
        $doctor = User::find($id);
        
        if ($doctor->status == "active") {
            if ($doctor->slider1 == 0) {
                $doctor->slider1 = 1;
                $doctor->save();
                return redirect(route('slider'))->with('successMsg',$doctor->username.' Successfully Added to Slider 1');      
            } else {
                $doctor->slider1 = 0;
                $doctor->save();
                return redirect(route('slider'))->with('successMsg',$doctor->username.' Successfully Removed form Slider 1');      
            }
        } else {
            return redirect(route('slider'))->with('errorMsg','User is Deactivate Can not add to slider right now :(');      
        }
    }

    public function actionSlider2($id)
    {
        $doctor = User::find($id);
        
        if ($doctor->status == "active") {
            if ($doctor->slider2 == 0) {
                $doctor->slider2 = 1;
                $doctor->save();
                return redirect(route('slider'))->with('successMsg',$doctor->username.' Successfully Added to Slider 2');      
            } else {
                $doctor->slider2 = 0;
                $doctor->save();
                return redirect(route('slider'))->with('successMsg',$doctor->username.' Successfully Removed form Slider 2');      
            }
        } else {
            return redirect(route('slider'))->with('errorMsg','User is Deactivate Can not add to slider right now :(');      
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
