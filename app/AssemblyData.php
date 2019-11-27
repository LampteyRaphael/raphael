<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssemblyData extends Model
{
    //


    protected  $fillable=[

        'local_id',
        'district_id',
        'area_id',
        'region_id',
        'name',
        'gpost',
        'nursing',
        'NameOfLocalPastor',
        'NameOfPresidingElder',
        'dateAppointPresiding',
        'mobileNumber',
        'NoMale',
        'noFemale',
        'noOfChildren',
        'noOfTens',
        'deacons',
        'deaconess',
        'elder',
        'totalMembership'
    ];


    public function local(){

        return $this->belongsTo('App\Local');
    }


    public function district(){

        return $this->belongsTo('App\District');
    }

    public function area(){

        return $this->belongsTo('App\Area');
    }

    public function region(){

        return $this->belongsTo('App\Region');
    }

    public function getNameOfPresidingElderAttribute($value){

        return strtoupper($value);
    }

    public function setNameAttribute($value){

        return $this->attributes['name']=strtoupper($value);
    }

    public function scopeGetLatest($value){

        return $value->orderBy('dateAppointPresiding','asc')->paginate(50);
    }


}
