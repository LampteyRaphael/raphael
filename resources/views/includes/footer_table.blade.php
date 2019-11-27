<!-- bottom footer -->
<footer class="content-footer">

    <nav class="footer-right">
        <ul class="nav">
            <li>
                <a href="javascript:;">Feedback</a>
            </li>
            <li>
                <a href="javascript:;" class="scroll-up">
                    <i class="fa fa-angle-up"></i>
                </a>
            </li>
        </ul>
    </nav>

    <nav class="footer-left">
        <ul class="nav">
            <li>
                <a href="javascript:;">Copyright <i class="fa fa-copyright"></i> <span>The Apostolic Church-Ghana</span> 2019.</a>
            </li>
            <li>
                <a href="javascript:;"></a>
            </li>
            <li>
                <a href="javascript:;">

                </a>
            </li>
        </ul>
    </nav>

</footer>
<!-- /bottom footer -->
<!-- chat -->
<div class="chat-panel">
    <div class="chat-inner">
        <div class="chat-users">
            <div class="nav-justified-xs">

                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#chat-list" data-toggle="tab">Online</a>
                    </li>
                    <li>
                        <a href="#market" data-toggle="tab"></a>
                    </li>
                    <li>
                        <a href="#activity" data-toggle="tab"></a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane active" id="chat-list">
                    <div class="chat-group">
                        <div class="chat-group-header">
                          Members  Online
                        </div>
                        @if(Auth::user()->isAdminHeadQuarters())
                            <table class="table">

                                @foreach(App\User::whereIn('role_id',[1,2,3,4])->get() as $user)
                                    <tr>
                                        <td><img class="img-circle" height="30" width="30" src="{{$user->photo? $user->photo->file :asset('images/placeholder.png')}}" alt=""></td>
                                        <td><a class="btn-link" href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>

                                        @if($user->isOnline())
                                            <td style="color: red">Online</td>

                                        @else
                                            <td style="color: blue">Offline</td>

                                        @endif

                                    </tr>
                                @endforeach

                            </table>

                        @elseif(Auth::user()->isAreaAdmin())
                            <table class="table">

                                @foreach(App\User::where('local_id',Auth::user()->local_id)->get() as $users)
                                    <tr>
                                        <td><img class="img-circle" height="30" width="30" src="{{$users->photo? $users->photo->file :asset('images/placeholder.png')}}" alt=""></td>
                                        <td><a class="btn-link" href="{{route('users.edit',$users->id)}}">{{$users->name}}</a></td>

                                        @if($users->isOnline())
                                            <td style="color: red">Online</td>

                                        @else
                                            <td style="color: blue">Offline</td>

                                        @endif

                                    </tr>
                                @endforeach

                            </table>

                        @elseif(Auth::user()->isAdminDistrict())
                            <table class="table">

                                @foreach(App\User::where('local_id',Auth::user()->local_id)->get() as $user)
                                    <tr>
                                        <td><img class="img-circle" height="30" width="30" src="{{$user->photo? $user->photo->file :asset('images/placeholder.png')}}" alt=""></td>
                                        <td><a class="btn-link" href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>

                                        @if($user->isOnline())
                                            <td style="color: red">Online</td>

                                        @else
                                            <td style="color: blue">Offline</td>

                                        @endif

                                    </tr>
                                @endforeach
                            </table>


                        @elseif(Auth::user()->isAdminLocal())
                            <table class="table">
                                @foreach(App\User::where('local_id',Auth::user()->local_id)->get() as $userl)
                                    <tr>
                                        <td><img class="img-circle" height="30" width="30" src="{{$userl->photo? $userl->photo->file :asset('images/placeholder.png')}}" alt=""></td>
                                        <td><a class="btn-link" href="{{route('users.edit',$userl->id)}}">{{$userl->name}}</a></td>

                                        @if($userl->isOnline())
                                            <td style="color: red">Online</td>

                                        @else
                                            <td style="color: blue">Offline</td>

                                        @endif

                                    </tr>
                                @endforeach
                            </table>

                        @elseif(Auth::user()->isMember())
                            <table>

                                @foreach(App\User::where('local_id',Auth::user()->local_id)->get() as $user)
                                    <tr>
                                        <td><img class="img-circle" height="30" width="30" src="{{$user->photo? $user->photo->file :asset('images/placeholder.png')}}" alt=""></td>
                                        <td><a class="btn-link" href="{{route('users.edit',$user->id)}}">{{$user->name}}</a></td>

                                        @if($user->isOnline())
                                            <td style="color: red">Online</td>

                                        @else
                                            <td style="color: blue">Offline</td>

                                        @endif

                                    </tr>
                                @endforeach

                            </table>

                        @endif

                    </div>
                </div>

                <div class="tab-pane" id="market">

                    <div class="chat-group">
                        <div class="chat-group-header">
                           Attendance
                        </div>
                    </div>
                    <div class="favourite-list">
                        @yield('chat1')
                    </div>
                </div>

            </div>

        </div>
        <div class="chat-conversation">

            <div class="chat-header">
                <a class="chat-back" href="javascript:;">
                    <i class="fa fa-angle-left"></i>
                </a>
                <div class="chat-header-title">

                </div>
                <a class="chat-right" href="javascript:;">
                    <i class="fa fa-circle-thin"></i>
                </a>
            </div>

            <div class="chat-conversation-content">

            </div>

            <div class="chat-conversation-footer">
                <button class="chat-input-tool">
                    <i class="fa fa-camera"></i>
                </button>
                <div class="chat-input" contenteditable=""></div>
                <button class="chat-send">
                    <i class="fa fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('scripts/extentions/modernizr.js')}}"></script>
<script src="{{asset('vendor/jquery/dist/jquery.js')}}"></script>
<script src="{{asset('vendor/jquery.easing/jquery.easing.js')}}"></script>
<script src="{{asset('vendor/fastclick/lib/fastclick.js')}}"></script>
<script src="{{asset('vendor/onScreen/jquery.onscreen.js')}}"></script>
<script src="{{asset('vendor/jquery-countTo/jquery.countTo.js')}}"></script>
<script src="{{asset('vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
<script src="{{asset('scripts/ui/accordion.js')}}"></script>
<script src="{{asset('scripts/ui/animate.js')}}"></script>
<script src="{{asset('scripts/ui/link-transition.js')}}"></script>
<script src="{{asset('scripts/ui/panel-controls.js')}}"></script>
<script src="{{asset('scripts/ui/preloader.js')}}"></script>
<script src="{{asset('scripts/ui/toggle.js')}}"></script>
<script src="{{asset('scripts/urban-constants.js')}}"></script>
<script src="{{asset('scripts/extentions/lib.js')}}"></script>
<script src="{{asset('scripts/javascript.js')}}"></script>
<script src="{{asset('js/javascript.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/d3/d3.min.js')}}"></script>
<script src="{{asset('vendor/rickshaw/rickshaw.min.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.categories.js')}}"></script>
<script src="{{asset('vendor/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('scripts/pages/dashboard.js')}}"></script>
<script src="{{asset('vendor/datatables/media/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('scripts/extentions/bootstrap-datatables.js')}}"></script>
<script src="{{asset('scripts/pages/datatables.js')}}"></script>
<!-- initialize page scripts -->
<script src="{{asset('scripts/pages/form-custom.js')}}"></script>
<!-- /initialize page scripts -->
</body>

</html>
