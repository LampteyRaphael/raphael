{{--@extends('layouts.app')--}}

{{--@section('dash')--}}
    {{--Dashboard--}}
{{--@endsection--}}
{{--@section('content')--}}

    {{--<div class="row justify-content-center">--}}
        {{--<div class="col-md-8">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header"></div>--}}

                {{--<div class="card-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success" role="alert">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}

        {{--<div class="col-md-3">--}}
            {{--{!! $totalMemberships->html() !!}--}}
        {{--</div>--}}

        {{--<div class="col-md-3">--}}
            {{--{!! $maleTotal->html() !!}--}}
        {{--</div>--}}

        {{--<div class="col-md-3">--}}
            {{--{!! $maleTotal->html() !!}--}}
        {{--</div>--}}

        {{--<div class="col-md-3">--}}
            {{--{!! $maleTotal->html() !!}--}}
        {{--</div>--}}

        {{--<div class="col-md-3">--}}
            {{--{!! $female->html() !!}--}}
        {{--</div>--}}

        {{--<div class="col-md-3">--}}
            {{--{!! $children->html() !!}--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
        {{--<div class="col-md-3">--}}
          {{--{!! $tens->html() !!}--}}
        {{--</div>--}}
        {{--<div class="col-md-3">--}}
            {{--{!! $deacons->html() !!}--}}
        {{--</div>--}}
        {{--<div class="col-md-3">--}}
            {{--{!! $deaconess->html() !!}--}}
        {{--</div>--}}

        {{--<div class="col-md-3">--}}
            {{--{!! $elder->html() !!}--}}
        {{--</div>--}}

        {{--<div class="col-md-3">--}}
            {{--{!! $nursing->html() !!}--}}
        {{--</div>--}}

    {{--</div>--}}

    {{--<hr>--}}

    {{--<div class="row">--}}
        {{--<div class="col-md-3">--}}
            {{--{!! $local->html() !!}--}}
        {{--</div>--}}
        {{--<div class="col-md-3">--}}
            {{--{!! $district->html() !!}--}}
        {{--</div>--}}
        {{--<div class="col-md-3">--}}
            {{--{!! $area->html() !!}--}}
        {{--</div>--}}

    {{--</div>--}}


    {{--{!! Charts::scripts() !!}--}}
    {{--{!! $maleTotal->script() !!}--}}
    {{--{!! $totalMemberships->script() !!}--}}
    {{--{!! $female->script() !!}--}}
    {{--{!! $children->script() !!}--}}
    {{--{!! $tens->script() !!}--}}
    {{--{!! $deacons->script() !!}--}}
    {{--{!! $deaconess->script() !!}--}}
    {{--{!! $elder->script() !!}--}}

    {{--{!! $local->script() !!}--}}
    {{--{!! $district->script() !!}--}}
    {{--{!! $area->script() !!}--}}
    {{--{!! $nursing->script() !!}--}}


{{--@endsection--}}
