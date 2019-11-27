<?php

namespace App\Http\Controllers;

use App\AssemblyData;
use App\Local;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locals=Local::GetLatest();

        return view('local.index',compact('locals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=AssemblyData::orderBy('dateAppointPresiding','asc')->paginate(50);

        return view('local.members',compact('users'));

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
        Local::create($request->all());

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
        $local=Local::where('district_id',$id)->GetLatest();

        session(['districtId'=>$id]);

        return view('local.show',compact('local','id'));
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
        //
        $local=Local::findOrFail($id);

        return view('local.edit',compact('local'));
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
            $region= Local::findOrFail($id);

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
        //
        try{
            $region=Local::findOrFail($id);

            $region->delete();

        }catch (ModelNotFoundException $exception){

            return back()->withInput(['Sorry ID Not Found']);
        }

        return redirect()->back()->with(['success1'=>'Successfully Updated']);
    }
}
