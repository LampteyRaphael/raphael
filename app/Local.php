<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    //
    protected $fillable=[
        'name',
        'district_id',
        'local_code',
        'date'
    ];

    public function getNameAttribute($value){

        return strtoupper($value);
    }

    public function setNameAttribute($value){

        return $this->attributes['name']=strtoupper($value);
    }

    public function user(){

        return $this->hasMany('App\User');
    }

    public function photo(){

        return  $this->belongsTo('App\Photo')->withDefault();
    }

    public function scopeGetLatest($value){

        return $value->orderBy('name','asc')->paginate(50);
    }


    public function assembleData(){

        return $this->belongsTo('App\AssemblyData');
    }


}
