@extends('layouts.app')
@section('dash')
    Districts
@endsection
@section('content')

    @if($district)
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
                        @foreach($district as $districts)
                            <tr>
                                <td><a href="{{route('area.show',$districts->id)}}">{{$districts->name}}</a></td>
                                    <td>{{App\AssemblyData::where('district_id',$districts->id)->where('nursing','yes')->pluck('nursing')->count()}} </td>
                                    <td>{{App\AssemblyData::where('district_id',$districts->id)->where('NameOfLocalPastor','!=',null)->pluck('NameOfLocalPastor')->count()}} </td>
                                    <td>{{App\AssemblyData::where('district_id',$districts->id)->where('NameOfPresidingElder','!=',null)->pluck('NameOfPresidingElder')->count()}} </td>
                                    <td>{{App\AssemblyData::where('district_id',$districts->id)->pluck('NoMale')->sum()}} </td>
                                    <td>{{App\AssemblyData::where('district_id',$districts->id)->pluck('NoFemale')->sum()}} </td>
                                    <td>{{App\AssemblyData::where('district_id',$districts->id)->pluck('noOfChildren')->sum()}} </td>
                                    <td>{{App\AssemblyData::where('district_id',$districts->id)->pluck('noOfTens')->sum()}} </td>
                                    <td>{{App\AssemblyData::where('district_id',$districts->id)->pluck('deacons')->sum()}} </td>
                                    <td>{{App\AssemblyData::where('district_id',$districts->id)->pluck('deaconess')->sum()}} </td>
                                    <td>{{App\AssemblyData::where('district_id',$districts->id)->pluck('elder')->sum()}} </td>
                                    <td>{{App\AssemblyData::where('district_id',$districts->id)->pluck('totalMembership')->sum()}} </td>
                                <td><a href="{{route('district.edit',$districts->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></td>

                                <td>
                                    {!! Form::open(['method'=>'DELETE','action'=>['DistrictController@destroy',$districts->id],'onsubmit' => 'return ConfirmDelete()',],['class'=>'form-inline'])!!}
                                    <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-edit"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </div>
                    </tbody>
                </table>
                {{$district->links()}}
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
