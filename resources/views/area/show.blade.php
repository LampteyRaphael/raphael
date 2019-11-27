@extends('layouts.app')
@section('dash')
    Areas
@endsection
@section('content')
    @include('includes.alert')
    <form class="modal" id="add" method="POST" action="{{ route('area.store') }}">
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
                        <label for="name" class="control-label">New Area Name</label>
                        <input type="text" name="name" class="form-control">
                        {{--{!! Form::label('name','New local Name',['class'=>'control-label']) !!}--}}
                        {{--{!! Form::text('name',null,['class'=>'form-control']) !!}--}}
                    </div>

                    <div class="form-group">
                        <div class="form-group ">
                            <label for="area_code" class="control-label">Area Code</label>
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
            <div class="table-responsive">
                <div class="pull-left"><a href="{{route('region.index')}}">Back</a></div>
                <div class="pull-right"><a href="#" data-toggle="modal" data-target="#add">+Add</a></div>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>NAMES</th>
                        <th>Nursing</th>
                        <th>NameOfLocalPastor</th>
                        <th>NameOfPresidingElder</th>
                        <th>Male</th>
                        <th>Female</th>
                        <th>No.Children</th>
                        <th>Teens(13-19)</th>
                        <th>Deacons</th>
                        <th>Deaconess</th>
                        <th>Elder</th>
                        <th>Total Membership</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <div class="table-responsive">
                        @foreach($region as $area)
                            <tr>
                                <td><a href="{{route('district.show',$area->id)}}">{{$area->name ? $area->name:"No Name"}}</a></td>
                                <td>{{App\AssemblyData::where('area_id',$area->id)->where('nursing','yes')->pluck('nursing')->count()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$area->id)->where('NameOfLocalPastor','!=',null)->pluck('NameOfLocalPastor')->count()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$area->id)->where('NameOfPresidingElder','!=',null)->pluck('NameOfPresidingElder')->count()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$area->id)->pluck('NoMale')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$area->id)->pluck('NoFemale')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$area->id)->pluck('noOfChildren')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$area->id)->pluck('noOfTens')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$area->id)->pluck('deacons')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$area->id)->pluck('deaconess')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$area->id)->pluck('elder')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$area->id)->pluck('totalMembership')->sum()}} </td>

                                <td><a href="{{route('area.edit',$area->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></td>

                                <td>
                                    {!! Form::open(['method'=>'DELETE','action'=>['AreaController@destroy',$area->id],'onsubmit' => 'return ConfirmDelete()',],['class'=>'form-inline'])!!}
                                    <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-edit"></i></button>
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                    </div>
                    </tbody>
                </table>

                {{$region->links()}}
            </div>

        </div>
    @endif


    <script>

        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }

    </script>
@endsection
