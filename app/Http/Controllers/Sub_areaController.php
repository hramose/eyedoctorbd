<?php

namespace App\Http\Controllers;

use App\Model\Sub_area;
use Illuminate\Http\Request;

class Sub_areaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_areas = Sub_area::all();
        return view('admin.sub-area.index',compact('sub_areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sub-area.create');
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
            "name" => 'required'
        ]);
        $sub_area = new Sub_area;
        $sub_area->name = $request->name;
        $sub_area->save();
        return redirect(route('sub-area.index'))->with('successMsg','Sub Area Successfully Added');
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
        $sub_area = Sub_area::find($id);
        return view('admin.sub-area.edit',compact('sub_area'));
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
        $this->validate($request,[
            "name" => 'required'
        ]);
        $sub_area = Sub_area::find($id);
        $sub_area->name = $request->name;
        $sub_area->save();
        return redirect(route('sub-area.index'))->with('successMsg','Sub Area Successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub_area = Sub_area::find($id)->delete();
        return redirect(route('sub-area.index'))->with('successMsg','Sub Area Successfully Deleted');
    }
}
