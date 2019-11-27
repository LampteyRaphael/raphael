<?php

namespace App\Http\Controllers;

use App\District;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $district=District::GetLatest();

        return view('district.index',compact('district'));
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
        District::create($request->all());

        return redirect()->back()->with(['success1' => 'Successfully created']);
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
        //showing district
        $district=District::where('area_id',$id)->GetLatest();

        return view('district.show',compact('district','id'));
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
        $area=District::findOrFail($id);

        return view('district.edit',compact('area'));
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
        try{
            $region= District::findOrFail($id);

            $input=$request->all();

            $region->update($input);

        }catch (ModelNotFoundException $exception){

            return back()->withInput(['Sorry Region Not Found']);
        }

        return redirect()->back()->with(['success1'=>'Successfully Updated']);
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
        try{
            $region=District::findOrFail($id);

            $region->delete();

        }catch (ModelNotFoundException $exception){

            return back()->withInput(['Sorry ID Not Found']);
        }

        return redirect()->back()->with(['success1'=>'Successfully Updated']);
    }
}
