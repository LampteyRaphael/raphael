@extends('layouts.app')

@section('dash')
    Regions
@endsection
@section('content')
    @include('includes.alert')
    @if($region)
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>NAMES</th>
                        <th>Nursing</th>
                        <th>Number Of Pastor</th>
                        <th>Number Of Presiding Elders</th>
                        <th>Male</th>
                        <th>Female</th>
                        <th>No.Children</th>
                        <th>Teens(13-19)</th>
                        <th>Deacons</th>
                        <th>Deaconess</th>
                        <th>Elders</th>
                        <th>Total Membership</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <div class="table-responsive">
                        @foreach($region as $regions)
                            <tr>
                                <td><a href="{{route('area.show',$regions->id)}}">{{$regions->name}}</a></td>
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
                                <td><a href="{{route('region.edit',$regions->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></td>

                                <td>
                                    {!! Form::model($regions,['method'=>'DELETE','action'=>['RegionController@destroy',$regions->id],'onsubmit' => 'return ConfirmDelete()',],['class'=>'form-inline'])!!}
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
