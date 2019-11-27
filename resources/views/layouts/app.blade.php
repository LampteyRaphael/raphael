{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<!-- CSRF Token -->--}}
    {{--<meta name="csrf-token" content="{{ csrf_token() }}">--}}

    {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}

    {{--<!-- Scripts -->--}}
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    {{--<!-- Fonts -->--}}
    {{--<link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    {{--<!-- Styles -->--}}
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
    {{--<div id="app">--}}
        {{--<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
            {{--<div class="container">--}}
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
                {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
                    {{--<span class="navbar-toggler-icon"></span>--}}
                {{--</button>--}}

                {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
                    {{--<!-- Left Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav mr-auto">--}}

                    {{--</ul>--}}

                    {{--<!-- Right Side Of Navbar -->--}}
                    {{--<ul class="navbar-nav ml-auto">--}}
                        {{--<!-- Authentication Links -->--}}
                        {{--@guest--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                            {{--</li>--}}
                            {{--@if (Route::has('register'))--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--</li>--}}
                            {{--@endif--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
                                    {{--<a class="dropdown-item" href="{{ route('logout') }}"--}}
                                       {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                        {{--{{ __('Logout') }}--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endguest--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</nav>--}}

        {{--<main class="py-4">--}}
            {{--@yield('content')--}}
        {{--</main>--}}
    {{--</div>--}}
{{--</body>--}}
{{--</html>--}}

        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pin Sheet</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('master/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('master/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('master/css/metisMenu.css')}}" rel="stylesheet">
    <link href="{{asset('master/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('master/css/timeline.css')}}" rel="stylesheet">
    {{--<link href="{{asset('master/css/blog-post.css')}}" rel="stylesheet">--}}
    <link href="{{asset('master/css/font-awesome.css')}}" rel="stylesheet">
    <script src="{{asset('bootstrap-3.3.4-dist/js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap-select-1.13.9/dist/css/bootstrap-select.css')}}">
    <script src="{{asset('bootstrap-notify-3.1.3/dist/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('bootstrap-select-1.13.9/dist/js/bootstrap-select.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('bootstrap-3.3.4-dist/css/bootstrap.min.css')}}">
    <script src="{{asset('jquery-3.4.1.min.js')}}"></script>
</head>

<body id="admin-page">

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin: 0;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}">Home</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    @if (Route::has('login'))
                        {{--<div class="top-right links">--}}
                            @auth
                                <li><a href="{{ url('/home') }}">Home</a></li>

                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                        {{--</div>--}}
                    @endif
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
@if(Auth::user())
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    {{--<li class="sidebar-search">--}}
                        {{--<div class="input-group custom-search-form">--}}
                            {{--<input type="text" class="form-control" placeholder="Search...">--}}
                            {{--<span class="input-group-btn">--}}
                                {{--<button class="btn btn-default" type="button">--}}
                                    {{--<i class="fa fa-search"></i>--}}
                                {{--</button>--}}
                            {{--</span>--}}
                        {{--</div>--}}
                        {{--<!-- /input-group -->--}}
                    {{--</li>--}}
                    <li>
                        <a href="{{route('home')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-wrench fa-fw"></i>Regions<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('region.index')}}">All Regions</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>



                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Area<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('area.index')}}">All Area</a>
                            </li>
                            {{--<li>--}}
                                {{--<a href="{{route('area.create')}}">Create Area</a>--}}
                            {{--</li>--}}
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>District<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('district.index')}}">All District</a>
                            </li>
                            {{--<li>--}}
                                {{--<a href="{{route('district.create')}}">Create District</a>--}}
                            {{--</li>--}}
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Locals<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('local.index')}}">All Locals</a>
                            </li>
                            {{--<li>--}}
                                {{--<a href="{{route('local.create')}}">Create Local</a>--}}
                            {{--</li>--}}
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Registration<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('region.create')}}">+Add Assembly Data</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Elders<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{route('local.create')}}">Elders list</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>


                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="flot.html">Flot Charts</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="morris.html">Morris.js Charts</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="panels-wells.html">Panels and Wells</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="buttons.html">Buttons</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="notifications.html">Notifications</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="typography.html">Typography</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="icons.html"> Icons</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="grid.html">Grid</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="#">Second Level Item</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Second Level Item</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Third Level <span class="fa arrow"></span></a>--}}
                                {{--<ul class="nav nav-third-level">--}}
                                    {{--<li>--}}
                                        {{--<a href="#">Third Level Item</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">Third Level Item</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">Third Level Item</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href="#">Third Level Item</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<!-- /.nav-third-level -->--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>--}}
                        {{--<ul class="nav nav-second-level">--}}
                            {{--<li>--}}
                                {{--<a href="blank.html">Blank Page</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="login.html">Login Page</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                        {{--<!-- /.nav-second-level -->--}}
                    {{--</li>--}}
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
@endif
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('dash')</h1>
                    @yield('content')
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{asset('master/js/jquery.js')}}"></script>
<script src="{{asset('master/js/bootstrap.min.js')}}"></script>
<script src="{{asset('master/js/metisMenu.js')}}"></script>
<script src="{{asset('master/js/sb-admin-2.js')}}"></script>
</body>

</html>
