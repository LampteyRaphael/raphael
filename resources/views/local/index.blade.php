@extends('layouts.app')
@section('dash')
    Locals
@endsection
@section('content')
    @if($locals)
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
                        @foreach($locals as $local)
                            <tr>
                                <td><a href="{{route('area.show',$local->id)}}">{{$local->name}}</a></td>
                                <td>{{App\AssemblyData::where('local_id',$local->id)->where('nursing','yes')->pluck('nursing')->count()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$local->id)->where('NameOfLocalPastor','!=',null)->pluck('NameOfLocalPastor')->count()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$local->id)->where('NameOfPresidingElder','!=',null)->pluck('NameOfPresidingElder')->count()}}</td>
                                <td>{{App\AssemblyData::where('local_id',$local->id)->pluck('NoMale')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$local->id)->pluck('NoFemale')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$local->id)->pluck('noOfChildren')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$local->id)->pluck('noOfTens')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$local->id)->pluck('deacons')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$local->id)->pluck('deaconess')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$local->id)->pluck('elder')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$local->id)->pluck('totalMembership')->sum()}} </td>
                                <td><a href="{{route('local.edit',$local->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></td>

                                <td>
                                    {!! Form::open(['method'=>'DELETE','action'=>['LocalController@destroy',$local->id],'onsubmit' => 'return ConfirmDelete()',],['class'=>'form-inline'])!!}
                                    <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-edit"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </div>

                    </tbody>
                </table>
                {{$locals->links()}}
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
