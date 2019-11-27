<?php

namespace App\Http\Controllers;

use App\Area;
use App\District;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area=Area::GetLatest();

        return view('area.index',compact('area'));
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
        Area::create($request->all());

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

        $region=Area::where('region_id',$id)->GetLatest();

        Session(['areaId'=>$id]);

        return view('area.show',compact('region','id'));

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
        $area=Area::findOrFail($id);

        return view('area.edit',compact('area'));
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
            $region= Area::findOrFail($id);

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
        try{
            $region=Area::findOrFail($id);

            $region->delete();

        }catch (ModelNotFoundException $exception){

            return back()->withInput(['Sorry ID Not Found']);
        }

        return redirect()->back()->with(['success1'=>'Successfully Updated']);
    }
}
