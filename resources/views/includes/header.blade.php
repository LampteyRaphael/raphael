<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="no-js" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('photos/logo 2.png')}}" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>The Apostolic Church Management System(Ghana)</title>
    <link rel="stylesheet" href="{{asset('styles/climacons-font.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/rickshaw/rickshaw.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('styles/roboto.css')}}">
    <link rel="stylesheet" href="{{asset('styles/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('styles/panel.css')}}">
    <link rel="stylesheet" href="{{asset('styles/feather.css')}}">
    <link rel="stylesheet" href="{{asset('styles/animate.css')}}">
    <link rel="stylesheet" href="{{asset('styles/urban.css')}}">
    <link rel="stylesheet" href="{{asset('styles/urban.skins.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-3.3.4-dist/css/bootstrap.min.css')}}">
    <script src="{{asset('jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('bootstrap-3.3.4-dist/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap-select-1.13.9/dist/css/bootstrap-select.css')}}">
    <script src="{{asset('bootstrap-notify-3.1.3/dist/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('bootstrap-select-1.13.9/dist/js/bootstrap-select.min.js')}}"></script>
    <style type="text/css">
        .breadcrumb{
            font-size: 13px;
            font-weight: bold;
            font-family: Roboto;
        }
        .breadcrumb > li{
            padding: 0px 0px;
            font-size: 15px;
            color: red;
            font-weight: bold;
        }

        .breadcrumb > li + li::before {
            padding: 0px 0px;
            font-size: 15px;
            color: blue;
            font-weight: bold;
            content: "\f105\00a0";
        }

        .panel-heading{
            padding: 0px;
            background-color:#f1f1f1;
            color: blue;
            font-family: Roboto;
            font-weight: bold;
            font-size: 12px;
        }

        .breadcrumb{
            background:-webkit-gradient(linear, left bottom, left top, color-stop(0, #dddddd), color-stop(1, #fdfdfd));
        }

    </style>
    <style media="screen">
        .loader{
            position: fixed;
            z-index: 99;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .loader >img{
            width: 100px;
        }

        .loader.hidden{
            animation: fadeOut 1s;
            animation-fill-mode: forwards;
        }


        @keyframes fadeOut {
            100%{
                opacity: 0;
                visibility: hidden;
            }
        }

        body{
            font-family:Roboto;
            font-size: 12px;
        }

    </style>
    {{--<script type="text/javascript">--}}
        {{--window.addEventListener('load',function(){--}}
            {{--const loader=document.querySelector('.loader');--}}
            {{--loader.className +=" hidden";--}}
        {{--});--}}
    {{--</script>--}}
</head>
<body data-spy="scroll" data-target="#affix" >

{{--<div class="page-loaded">--}}

{{--</div><div class="loader">--}}
    {{--<img src="{{asset('photos/200.gif')}}" alt="loading...."/></div>--}}
{{--<div id="content">--}}
    {{--<span class="expand"></span>--}}
{{--</div>--}}
