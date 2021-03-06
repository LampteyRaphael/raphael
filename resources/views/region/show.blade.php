@extends('layouts.app')
@section('dash')
    Area
@endsection
@section('content')
    <form class="modal" id="add" method="POST" action="{{ route('district.store') }}">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"></div>
                <div class="modal-body">
                    <div class="form-group hidden">
                        <label for="region_id" class="control-label">Name</label>
                        <input type="number" name="region_id" value="{{$id}}" class="form-control">

                        {{--{!! Form::label('district_id','District',['class'=>'control-label']) !!}--}}
                        {{--{!! Form::select('district_id',[=>],null,['class'=>'form-control']) !!}--}}
                    </div>

                    <div class="form-group ">
                        <label for="name" class="control-label">New District Name</label>
                        <input type="text" name="name" class="form-control">
                        {{--{!! Form::label('name','New local Name',['class'=>'control-label']) !!}--}}
                        {{--{!! Form::text('name',null,['class'=>'form-control']) !!}--}}
                    </div>

                    <div class="form-group">
                        <div class="form-group ">
                            <label for="area_code" class="control-label">District Code</label>
                            <input type="text" name="area_code" id="area_code" class="form-control">
                            {{--{!! Form::label('local_code','Local Code',['class'=>'control-label']) !!}--}}
                            {{--{!! Form::text('local_code',null,['class'=>'form-control']) !!}--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group ">
                            <label for="date" class="control-label">Date  Was Created(optional)</label>
                            <input type="date" name="date" class="form-control">

                            {{--{!! Form::label('date','Date  Was Created(optional)',['class'=>'control-label']) !!}--}}
                            {{--{!! Form::date('date',null,['class'=>'form-control']) !!}--}}
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary btn-sm pull-right">Submit</button>
                </div>
            </div>
        </div>
    </form>

    @if($region)
        <div class="row">
            <div class="pull-left"><a href="{{route('region.index')}}">Back</a></div>
            <div class="pull-right"><a href="#" data-toggle="modal" data-target="#add">+Add</a></div>
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>NAMES</th>
                </tr>
                </thead>
                <tbody>
                @foreach($region as $regions)
                    <tr>
                        <td><a href="{{route('district.show',$regions->id)}}">{{$regions->name}}</a></td>
                        <td>{{App\AssemblyData::where('region_id',$regions->id)->where('nursing','yes')->pluck('nursing')->count()}} </td>
                        <td>{{App\AssemblyData::where('region_id',$regions->id)->where('NameOfLocalPastor','!=',null)->pluck('NameOfLocalPastor')->count()}} </td>
                        <td>{{App\AssemblyData::where('region_id',$regions->id)->where('NameOfPresidingElder','!=',null)->pluck('NameOfPresidingElder')->count()}} </td>
                        <td>{{App\AssemblyData::where('region_id',$regions->id)->pluck('NoMale')->sum()}} </td>
                        <td>{{App\AssemblyData::where('region_id',$regions->id)->pluck('NoFemale')->sum()}} </td>
                        <td>{{App\AssemblyData::where('region_id',$regions->id)->pluck('noOfChildren')->sum()}} </td>
                        <td>{{App\AssemblyData::where('region_id',$regions->id)->pluck('noOfTens')->sum()}} </td>
                        <td>{{App\AssemblyData::where('region_id',$regions->id)->pluck('deacons')->sum()}} </td>
                        <td>{{App\AssemblyData::where('region_id',$regions->id)->pluck('deaconess')->sum()}} </td>
                        <td>{{App\AssemblyData::where('region_id',$regions->id)->pluck('elder')->sum()}} </td>
                        <td>{{App\AssemblyData::where('region_id',$regions->id)->pluck('totalMembership')->sum()}} </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif



@endsection
