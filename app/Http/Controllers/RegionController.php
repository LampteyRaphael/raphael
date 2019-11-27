<?php

namespace App\Http\Controllers;

use App\Area;
use App\AssemblyData;
use App\District;
use App\Local;
use App\Region;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region=Region::GetLatest();

        return view('region.index',compact('region'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //membership data form
        $region=Region::pluck('name','id')->all();
        $area=Area::pluck('name','id')->all();
        $district=District::pluck('name','id')->all();
        $local=Local::pluck('name','id')->all();
        return view('assembly',compact('area','district','local','region'));
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
        AssemblyData::create($request->all());

        return redirect()->back()->with(['success1'=>'Successfully Posted']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {



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

        $regions=Region::findOrFail($id);


        return view('region.edit',compact('regions'));
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
        try{
           $region= Region::findOrFail($id);

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

            $region=Region::findOrFail($id);

            $region->delete();

          }catch (ModelNotFoundException $exception){

            return back()->withInput(['Sorry ID Not Found']);
        }

        return redirect()->back()->with(['success1'=>'Successfully Updated']);
    }
}
