@extends('layouts.app')

@section('dash')
   Locals
@endsection
@section('content')
    @include('includes.form_error')
    @include('includes.alert')

    <form class="modal" id="add" method="POST" action="{{ route('local.store') }}">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"></div>
                <div class="modal-body">
                        <div class="form-group hidden">
                            <label for="district_id" class="control-label">name</label>
                            <input type="number" name="district_id" value="{{$id}}" class="form-control">

                            {{--{!! Form::label('district_id','District',['class'=>'control-label']) !!}--}}
                            {{--{!! Form::select('district_id',[=>],null,['class'=>'form-control']) !!}--}}
                        </div>

                        <div class="form-group ">
                            <label for="name" class="control-label">New Local Name</label>
                            <input type="text" name="name" class="form-control">
                            {{--{!! Form::label('name','New local Name',['class'=>'control-label']) !!}--}}
                            {{--{!! Form::text('name',null,['class'=>'form-control']) !!}--}}
                        </div>

                        <div class="form-group">
                            <div class="form-group ">
                                <label for="local_code" class="control-label">Local Code</label>
                                <input type="text" name="local_code" id="local_code" class="form-control">
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

    @if($local)
        <div class="row">
            <div class="table-responsive">
                <div class="pull-left"><a href="{{route('district.show',Session::get('districtId'))}}">Back</a></div>
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
                        @foreach($local as $locals)
                            <tr>
                                <td><a href="#">{{$locals->name}}</a></td>
                                <td>{{App\AssemblyData::where('local_id',$locals->id)->where('nursing','yes')->pluck('nursing')->count()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$locals->id)->where('NameOfLocalPastor','!=',null)->pluck('NameOfLocalPastor')->count()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$locals->id)->where('NameOfPresidingElder','!=',null)->pluck('NameOfPresidingElder')->count()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$locals->id)->pluck('NoMale')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$locals->id)->pluck('NoFemale')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$locals->id)->pluck('noOfChildren')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$locals->id)->pluck('noOfTens')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$locals->id)->pluck('deacons')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$locals->id)->pluck('deaconess')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$locals->id)->pluck('elder')->sum()}} </td>
                                <td>{{App\AssemblyData::where('local_id',$locals->id)->pluck('totalMembership')->sum()}} </td>
                                <td><a href="{{route('local.edit',$locals->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></td>
                                <td>
                                    {!! Form::open(['method'=>'DELETE','action'=>['LocalController@destroy',$locals->id],'onsubmit' => 'return ConfirmDelete()',],['class'=>'form-inline'])!!}
                                    <button class="btn btn-danger btn-xs" type="submit"><i class="fa fa-edit"></i></button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </div>
                    </tbody>
                </table>
                {{$local->links()}}
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
