@extends('layouts.app')

@section('dash')
    Assembly Data Update Form
@endsection
@section('content')
@include('includes.alert')
<div class="row">
    {!! Form::open(['route' => 'region.store','class'=>'form-horizontal']) !!}

    <fieldset>
        <legend>Step 1</legend>
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('local_id','Assembly Name:',['class'=>'control-label col-md-3']) !!}
                <div class="col-md-8">
                    {!! Form::select('local_id',['--Choose Options--']+$local,null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>

            <div class="form-group ">
                {!! Form::label('gpost','Ghana Post:',['class'=>'control-label col-md-3']) !!}
                <div class="col-md-8">
                    {!! Form::text('gpost',null,['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group ">
                {!! Form::label('district_id','District:',['class'=>'control-label col-md-3']) !!}
                <div class="col-md-8">
                    {!! Form::select('district_id',['--Choose Options--']+$district,null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>

            <div class="form-group ">
                {!! Form::label('area_id','Area:',['class'=>'control-label col-md-3']) !!}
                <div class="col-md-8">
                    {!! Form::select('area_id',['--Choose Options--']+$area,null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>

            <div class="form-group ">
                {!! Form::label('region_id','Region:',['class'=>'control-label col-md-3']) !!}
                <div class="col-md-8">
                    {!! Form::select('region_id',['--Choose Options--']+$region,null,['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>


            <div class="form-group">
                {!! Form::label('nursing','Nursery:',['class'=>'control-label col-md-3']) !!}
                <div class="col-md-1">
                    Yes{!! Form::radio('nursing','yes',['class'=>'form-control','required'=>'required']) !!}
                </div>

                <div class="col-md-1">
                    No{!! Form::radio('nursing','no',['class'=>'form-control','required'=>'required']) !!}
                </div>
            </div>
        </div>
    </fieldset>


    <fieldset>
        <legend>Step 2</legend>
        <div class="col-sm-12">
            <div class="form-group ">
                {!! Form::label('NameOfLocalPastor','Name Of Local Pastor(if any):',['class'=>'control-label col-md-3']) !!}
                <div class="col-md-8">
                    {!! Form::text('NameOfLocalPastor',null,['class'=>'form-control']) !!}
                </div>
            </div>

            <div class="form-group ">
                {!! Form::label('NameOfPresidingElder','Name Of Presiding Elder',['class'=>'control-label col-md-3']) !!}
                <div class="col-md-8">
                    {!! Form::text('NameOfPresidingElder',null,['class'=>'form-control' ,'required'=>'required']) !!}
                </div>
            </div>


        </div>
        <div class="col-md-12">
            <div class="col-md-7">
                <div class="form-group">
                    {!! Form::label('dateAppointPresiding','Date Appointed as Presiding Elder',['class'=>'control-label col-md-6']) !!}
                    <div class="col-md-6">
                        {!! Form::date('dateAppointPresiding',null,['class'=>'form-control']) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group ">
                    {!! Form::label('mobileNumber','Mobile Number',['class'=>'control-label col-md-2']) !!}
                    <div class="col-md-8">
                        {!! Form::number('mobileNumber',null,['class'=>'form-control','required'=>'required']) !!}
                    </div>
                </div>
            </div>
        </div>

    </fieldset>

    <fieldset>
        <legend>Step 3 (Membership Strength)</legend>
        <div class="form-group ">
            {!! Form::label('NoMale','No. Of Male',['class'=>'control-label col-md-3']) !!}
            <div class="col-md-8">
                {!! Form::number('NoMale',null,['class'=>'form-control','required'=>'required']) !!}
            </div>
        </div>

        <div class="form-group ">
            {!! Form::label('noFemale','No. Of Female',['class'=>'control-label col-md-3']) !!}
            <div class="col-md-8">
                {!! Form::number('noFemale',null,['class'=>'form-control','required'=>'required']) !!}
            </div>
        </div>

        <div class="form-group ">
            {!! Form::label('noOfChildren','No. Of Children',['class'=>'control-label col-md-3']) !!}
            <div class="col-md-8">
                {!! Form::number('noOfChildren',null,['class'=>'form-control','required'=>'required']) !!}
            </div>
        </div>

        <div class="form-group ">
            {!! Form::label('noOfTens','No. Of Tens(13 to 19 yrs)',['class'=>'control-label col-md-3']) !!}
            <div class="col-md-8">
                {!! Form::number('noOfTens',null,['class'=>'form-control','required'=>'required']) !!}
            </div>
        </div>
        <div class="form-group ">
            {!! Form::label('deacons','Deacons',['class'=>'control-label col-md-3']) !!}
            <div class="col-md-8">
                {!! Form::number('deacons',null,['class'=>'form-control','required'=>'required']) !!}
            </div>
        </div>
        <div class="form-group ">
            {!! Form::label('deaconess','Deaconess',['class'=>'control-label col-md-3']) !!}
            <div class="col-md-8">
                {!! Form::number('deaconess',null,['class'=>'form-control','required'=>'required']) !!}
            </div>
        </div>

        <div class="form-group ">
            {!! Form::label('elder','No. Of Elders',['class'=>'control-label col-md-3']) !!}
            <div class="col-md-8">
                {!! Form::number('elder',null,['class'=>'form-control','required'=>'required']) !!}
            </div>
        </div>

        <div class="form-group ">
            {!! Form::label('totalMembership','Total Membership',['class'=>'control-label col-md-3']) !!}
            <div class="col-md-8">
                {!! Form::number('totalMembership',null,['class'=>'form-control','required'=>'required']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class=" col-md-offset-10">
                <div class="form-group ">
                    {!! Form::submit('submit',['class'=>'btn btn-primary']) !!}
                </div>
            </div>
        </div>

    </fieldset>

    {!! Form::close() !!}

</div>


@endsection
