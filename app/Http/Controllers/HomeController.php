<?php

namespace App\Http\Controllers;

use App\Area;
use App\AssemblyData;
use App\District;
use App\Local;
use App\Region;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $totalMembership=AssemblyData::pluck('totalMembership')->sum();
        $male=AssemblyData::pluck('NoMale')->sum();

        $totalFemale=AssemblyData::pluck('noFemale')->sum();

        $numberOfChildrens=AssemblyData::pluck('noOfChildren')->sum();

        $tens=AssemblyData::pluck('noOfTens')->sum();

        $deacons=AssemblyData::pluck('deacons')->sum();

        $deaconess=AssemblyData::pluck('deaconess')->sum();

        $elder=AssemblyData::pluck('elder')->sum();

        $nursing=AssemblyData::where('nursing','yes')->count();


        $local=Local::pluck('id')->count();
        $district=District::pluck('id')->count();
        $area=Area::pluck('id')->count();


        //total membership
        $totalMemberships= Charts::create('percentage', 'justgage')
            ->title('Membership')
            ->elementLabel('Total Number')
            ->values([$totalMembership,0,$totalMembership])
            ->responsive(true)
            ->height(300)
            ->width(0);


        $maleTotal= Charts::create('percentage', 'justgage')
            ->title('Male')
            ->elementLabel('Total Number')
            ->values([$male,0,$totalMembership])
            ->responsive(true)
            ->height(300)
            ->width(0);

        $female = Charts::create('percentage', 'justgage')
            ->title('Female')
            ->elementLabel('Total Number')
            ->values([$totalFemale,0,$totalMembership])
            ->responsive(true)
            ->height(300)
            ->width(0);

        $children = Charts::create('percentage', 'justgage')
            ->title('Children')
            ->elementLabel('Total Number')
            ->values([$numberOfChildrens,0,$totalMembership])
            ->responsive(true)
            ->height(300)
            ->width(0);

        $tens = Charts::create('percentage', 'justgage')
            ->title('Tens')
            ->elementLabel('Total Number')
            ->values([$tens,0,$totalMembership])
            ->responsive(true)
            ->height(300)
            ->width(0);

        $deacons = Charts::create('percentage', 'justgage')
            ->title('Deacons')
            ->elementLabel('Total Number')
            ->values([$deacons,0,$totalMembership])
            ->responsive(true)
            ->height(300)
            ->width(0);


        $deaconess = Charts::create('percentage', 'justgage')
            ->title('Deaconess')
            ->elementLabel('Total Number')
            ->values([$deaconess,0,$totalMembership])
            ->responsive(true)
            ->height(300)
            ->width(0);

        $elder = Charts::create('percentage', 'justgage')
            ->title('Elders')
            ->elementLabel('Total Number')
            ->values([$elder,0,$totalMembership])
            ->responsive(true)
            ->height(300)
            ->width(0);

        $nursing = Charts::create('percentage', 'justgage')
            ->title('Nursery')
            ->elementLabel('Total Number')
            ->values([$nursing,0,$totalMembership])
            ->responsive(true)
            ->height(300)
            ->width(0);

        $local = Charts::create('percentage', 'justgage')
            ->title('Locals')
            ->elementLabel('Total Number')
            ->values([$local,0,$totalMembership])
            ->responsive(true)
            ->height(300)
            ->width(0);

        $district = Charts::create('percentage', 'justgage')
            ->title('Districts')
            ->elementLabel('Total Number')
            ->values([$district,0,$totalMembership])
            ->responsive(true)
            ->height(300)
            ->width(0);

        $area = Charts::create('percentage', 'justgage')
            ->title('Areas')
            ->elementLabel('Total Number')
            ->values([$area,0,$totalMembership])
            ->responsive(true)
            ->height(300)
            ->width(0);


        return view('home',compact('maleTotal','totalMemberships','female','children',

            'tens','deacons','deaconess','elder','local','district','area','nursing'));
    }
}
