@extends('layouts.app')
@section('dash')
    Edit Region
@endsection
@section('content')
    @include('includes.alert')
    {!! Form::model($regions,['method'=>'PUT', 'action'=>['RegionController@update',$regions->id],'onSubmit'=>'ConfirmDelete()']) !!}
    <div class="col-md-11">
        <div class="form-group">
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-md-1">
        <div class="form-group">
            {!! Form::submit('Update',['class'=>'btn btn-primary btn-sm']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    <script>

        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to update?");
            if (x)
                return true;
            else
                return false;
        }

    </script>
@endsection


