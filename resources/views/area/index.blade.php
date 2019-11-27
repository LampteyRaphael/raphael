@extends('layouts.app')
@section('dash')
    Areas
@endsection
@section('content')
    @if($area)
        <div class="row">
            <div class="table-responsive">
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
                        @foreach($area as $areas)
                            <tr>
                                <td><a href="{{route('area.show',$areas->id)}}">{{$areas->name? $areas->name:"No Name"}}</a></td>
                                <td>{{App\AssemblyData::where('area_id',$areas->id)->where('nursing','yes')->pluck('nursing')->count()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$areas->id)->where('NameOfLocalPastor','!=',null)->pluck('NameOfLocalPastor')->count()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$areas->id)->where('NameOfPresidingElder','!=',null)->pluck('NameOfPresidingElder')->count()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$areas->id)->pluck('NoMale')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$areas->id)->pluck('NoFemale')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$areas->id)->pluck('noOfChildren')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$areas->id)->pluck('noOfTens')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$areas->id)->pluck('deacons')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$areas->id)->pluck('deaconess')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$areas->id)->pluck('elder')->sum()}} </td>
                                <td>{{App\AssemblyData::where('area_id',$areas->id)->pluck('totalMembership')->sum()}} </td>
                                <td><a href="{{route('area.edit',$areas->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></td>

                                <td>
                                    {!! Form::open(['method'=>'DELETE','action'=>['AreaController@destroy',$areas->id],'onsubmit' => 'return ConfirmDelete()',],['class'=>'form-inline'])!!}
                                    <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-edit"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach

                    </div>

                    </tbody>
                </table>
                {{$area->links()}}
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
