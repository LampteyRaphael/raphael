<!-- quick launch panel -->
<div class="quick-launch-panel">
  <div class="container">
    <div class="quick-launcher-inner">
      <a href="javascript:;" class="close" data-toggle="quick-launch-panel">×</a>
      <div class="css-table-xs">
        @if(Auth::user()->isAdminHeadQuarters())
          <div class="col">
            <a href="{{route('dashboard.index')}}">
              <i class="icon-marquee"></i>
              <span>Dashboard</span>
            </a>
          </div>
          <div class="col">
            <a href="{{route('region.index')}}">
              <i class="icon-drop"></i>
              <span>Regions</span>
            </a>
          </div>
          <div class="col">
            <a href="{{route('area.index')}}">
              <i class="icon-search"></i>
              <span>Areas</span>
            </a>
          </div>
          <div class="col">
            <a href="{{route('district.index')}}">
              <i class="icon-speech-bubble"></i>
              <span>Districts</span>
            </a>
          </div>
          <div class="col">
            <a href="{{route('locals.index')}}">
              <i class="icon-pie-graph"></i>
              <span>Locals</span>
            </a>
          </div>
          <div class="col">
            <a href="{{route('regioncircular.index')}}">
              <i class="icon-esc"></i>
              <span>Announcement</span>
            </a>
          </div>
          @elseif(Auth::user()->isAreaAdmin())
            <div class="col">
              <a href="{{route('areaDashboard.index')}}">
                <i class="icon-marquee"></i>
                <span>Dashboard</span>
              </a>
            </div>
            <div class="col">
              <a href="{{route('areamembers.index')}}">
                <i class="icon-drop"></i>
                <span>Church Members</span>
              </a>
            </div>
            <div class="col">
              <a href="app-messages.html">
                <i class="icon-mail"></i>
                <span>Messages</span>
              </a>
            </div>
            <div class="col">
              <a href="{{route('waiting.index')}}">
                <i class="icon-speech-bubble"></i>
                <span>Announcement</span>
              </a>
            </div>
            <div class="col">
              <a href="{{route('level.index')}}">
                <i class="icon-pie-graph"></i>
                <span>Area-local</span>
              </a>
            </div>
            <div class="col">
              <a href="javascript:;">
                <i class="icon-esc"></i>
                <span>Audit Trail</span>
              </a>
            </div>

          @elseif(Auth::user()->isAdminDistrict())
            <div class="col">
              <a href="{{route('dashboard-d.index')}}">
                <i class="icon-marquee"></i>
                <span>Dashboard</span>
              </a>
            </div>
            <div class="col">
              <a href="{{route('addnew.index')}}">
                <i class="icon-drop"></i>
                <span>Church Members</span>
              </a>
            </div>
            <div class="col">
              <a href="#">
                <i class="icon-mail"></i>
                <span>Messages</span>
              </a>
            </div>
            <div class="col">
              <a href="{{route('circular1.index')}}">
                <i class="icon-speech-bubble"></i>
                <span>Announcement</span>
              </a>
            </div>
            <div class="col">
              <a href="{{route('districtAttendance')}}">
                <i class="icon-pie-graph"></i>
                <span>Attendance</span>
              </a>
            </div>
            <div class="col">
              <a href="javascript:;">
                <i class="icon-esc"></i>
                <span>Audit Trail</span>
              </a>
            </div>
          @elseif(Auth::user()->isAdminLocal())
            <div class="col">
              <a href="{{route('local.index')}}">
                <i class="icon-marquee"></i>
                <span>Dashboard</span>
              </a>
            </div>
            <div class="col">
              <a href="{{route('registration.index')}}">
                <i class="icon-drop"></i>
                <span>Church Members</span>
              </a>
            </div>
            <div class="col">
              <a href="{{route('birthday.index')}}">
                <i class="icon-mail"></i>
                <span>Messages</span>
              </a>
            </div>
            <div class="col">
              <a href="{{route('nationalcircular.index')}}">
                <i class="icon-speech-bubble"></i>
                <span>Announcement</span>
              </a>
            </div>
            <div class="col">
              <a href="{{route('attendance.index')}}">
                <i class="icon-pie-graph"></i>
                <span>Attendance</span>
              </a>
            </div>
            <div class="col">
              <a href="{{route('audit-trail.index')}}">
                <i class="icon-esc"></i>
                <span>Audit Trail</span>
              </a>
            </div>
          @elseif(Auth::user()->isMember())
            <div class="col">
              <a href="#">
                <i class="icon-marquee"></i>
                <span>Dashboard</span>
              </a>
            </div>
            <div class="col">
              <a href="#">
                <i class="icon-drop"></i>
                <span>Church Members</span>
              </a>
            </div>
            <div class="col">
              <a href="#">
                <i class="icon-mail"></i>
                <span>Messages</span>
              </a>
            </div>
            <div class="col">
              <a href="#">
                <i class="icon-speech-bubble"></i>
                <span>Announcement</span>
              </a>
            </div>
            <div class="col">
              <a href="#">
                <i class="icon-pie-graph"></i>
                <span>Attendance</span>
              </a>
            </div>
            <div class="col">
              <a href="javascript:;">
                <i class="icon-esc"></i>
                <span>Audit Trail</span>
              </a>
            </div>

          @endif

      </div>
    </div>
  </div>
</div>
<!-- /quick launch panel -->

<div class="app layout-fixed-header">

  <!-- sidebar panel -->
  <div class="sidebar-panel offscreen-left">

    <div class="brand">
      <img src="{{asset('photos/logo4.png')}}" height="30" alt="">
        {{--<h1 class="bg-white">TACMS</h1>--}}
      <!-- logo -->
      <div class="brand-logo">

      </div>
      <!-- /logo -->

      <!-- toggle small sidebar menu -->
      <a href="javascript:;" class="toggle-sidebar hidden-xs hamburger-icon v3 " data-toggle="layout-small-menu">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </a>
      <!-- /toggle small sidebar menu -->

    </div>

    <!-- main navigation -->
    <nav role="navigation">

      <img class="img img-responsive" src="{{asset('photos/logo 2.png')}}" alt="banner" width="30%" height="30%" style="margin-left: 50px;">

    @if(Auth::user()->isAdminHeadQuarters())

      <ul class="nav">

        <!-- dashboard -->
        {{--<li>--}}
          {{--<a href="{{route('dashboard.index')}}">--}}
            {{--<i class=""></i>--}}
            {{--<span></span>--}}
          {{--</a>--}}
        {{--</li>--}}

        <!-- ui -->
        <li>
          <a href="javascript:;">
            <i class="fa fa-flask"></i>
            <span>Dashboard</span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="{{route('dashboard.index')}}">
                <i class="fa fa-home"></i>
                <span>Home</span>
              </a>
            </li>

            <li>
              {{--<a href="{{route('users.create')}}">--}}
                <span>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </span>
              {{--</a>--}}
            </li>
          </ul>
        </li>
        <!-- /ui -->

        <!-- /dashboard -->

        <!-- ui -->
        <li>
          <a href="javascript:;">
            <i class="fa fa-toggle-on"></i>
            <span>Admins</span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="{{route('users.index')}}">
                <i class="fa fa-users"></i>
                <span>Admin Users</span>
              </a>
            </li>
            <li>
              <a href="{{route('Anonymous.index')}}">
                <i class="fa fa-users"></i>
                <span>Anonymous</span>
              </a>
            </li>
            <li>
              <a href="{{route('users.create')}}">
                <i class="fa fa-plus"></i>
                <span>Add Member</span>
              </a>
            </li>
          </ul>
        </li>
        <!-- /ui -->

        <!-- forms -->
        <li>
          <a href="javascript:;">
            <i class="fa fa-tint"></i>
            <span>Church Levels</span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="{{route('region.index')}}">
                <i class="fa fa-bookmark-o"></i>
                <span>National</span>
              </a>
            </li>
            <li>
              <a href="{{route('area.index')}}">
                <i class="fa fa-area-chart"></i>
                <span>Areas</span>
              </a>
            </li>
            <li>
              <a href="{{route('district.index')}}">
                <i class="fa fa-diamond"></i>
                <span>Districts</span>
              </a>
            </li>
            <li>
              <a href="{{route('locals.index')}}">
                <i class="fa fa-location-arrow"></i>
                <span>Locals</span>
              </a>
            </li>
            <li>
              <a href="{{route('region.create')}}">
                <i class="fa fa-plus"></i>
                <span>Add Region</span>
              </a>
            </li>
          </ul>
        </li>

        <li>
          <a href="javascript:;">
            <i class="fa fa-pie-chart"></i>
            <span>Church Account</span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="{{route('IncomeNa.create')}}">
                <i class="fa fa-money"></i>
                Add Income
              </a>
            </li>
            <li>
              <a href="{{route('Ex.create')}}">
                <i class="fa fa-money"></i>
                Add Expenditure
              </a>
            </li>

            <li>
              <a href="">
                <i class="fa fa-tag"></i>
                <span>Income</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{route('categoryNa.index')}}">
                    <i class="fa fa-bookmark"></i>
                  <span>
                    All Categories
                  </span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="">
                <i class="fa fa-tag"></i>
                <span>Expenditure</span>
              </a>
              <ul class="sub-menu">
                <li class="active">
                  <a href="{{route('ExCategory.index')}}">
                    <i class="fa fa-bookmark-o"></i>
                    <span>All Categories</span>
                  </a>
                </li>
              </ul>
            </li>

            <li>
              <a href="javascript:;">
                <i class="fa fa-pie-chart"></i>
                <span>Tithe Report</span>
              </a>
              <ul class="sub-menu">
                <li>
                  <a href="{{route('NDaily')}}">
                    <i class="fa fa-calendar"></i>
                    <span>Daily Tithe</span>
                  </a>
                </li>
                <li>
                  <a href="{{route('NMonthly')}}">
                    <i class="fa fa-calendar"></i>
                    <span>Monthly Tithe</span>
                  </a>
                </li>
                <li>
                  <a href="{{route('NRange')}}">
                    <i class="fa fa-calendar"></i>
                    <span>Range of Tithe</span>
                  </a>
                </li>
                <li>
                  <a href="{{route('NYear')}}">
                    <i class="fa fa-calendar"></i>
                    <span>Yearly Tithe</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- /forms -->
        <li>
          <a href="javascript:;">
            <i class="fa fa-map-marker"></i>
            <span>Announcement</span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="{{route('regioncircular.index')}}">
                <i class="fa fa-share"></i>
                <span>Local Announcement</span>
              </a>
            </li>
            <li>
              <a href="{{route('districtCircular.index')}}">
                <i class="fa fa-share"></i>
                <span>District Announcement</span>
              </a>
            </li>
          </ul>
        </li>

        <li>
          <a href="javascript:;">
            <i class="fa fa-wrench"></i>
            <span>Attendance</span>
          </a>
          <ul class="sub-menu">
            <li>
              <a href="">
                <i class="fa fa-reply-all"></i>
                <span>Report</span>
              </a>
            </li>
            <li>
              <a href="{{route('districtCircular.index')}}">
                <i class="fa fa-calendar"></i>
                <span>Daily</span>
              </a>
            </li>
          </ul>
        </li>

        <li>
          <a href="{{route('nationalauditLogin')}}">
            <i class="fa fa-wrench"></i>
            <span class="">Audit Trail</span>
          </a>
        </li>
        <li>
          <a href="{{route('NationalChart.index')}}">
            <i class="fa fa-line-chart"></i>
            <span class="">Chat Room</span>
          </a>
        </li>

        <!-- charts -->

      @elseif(Auth::user()->isAreaAdmin())

        <ul class="nav">

          <!-- ui -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-flask"></i>
              <span>Dashboard</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('areaDashboard.index')}}">
                  <span>Home</span>
                </a>
              </li>
              <li>
                <span>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </span>
                {{--</a>--}}
              </li>
            </ul>
          </li>
          <!-- /ui -->

          <!-- ui -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-tint"></i>
              <span>Church Member</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('areamembers.index')}}">
                  <span>Active Church Members</span>
                </a>
              </li>
              <li>
                <a href="{{route('Admins.index')}}">
                  <span>Admins users</span>
                </a>
              </li>
              @if(Auth::user()->role_id==6)

                <li>
                  <a href="{{route('Admins.edit',Auth::user()->id)}}">
                    <span>Anonymous User</span>
                  </a>
                </li>
              @else
              @endif
              <li>
                <a href="{{route('updates.index')}}">
                  <span>None Active Members</span>
                </a>
              </li>
              <li>
                <a href="{{route('updates.create')}}">
                  <span>Deceased</span>
                </a>
              </li>
              <li>
                <a href="">
                  <span>New Convert</span>
                </a>
              </li>
              <li>
                <a href="{{route('level.create')}}">
                  <span>Add Member</span>
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;">
              <i class="fa fa-toggle-on"></i>
              <span>Area</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('level.index')}}">
                  <span>{{Auth::user()->area->name}} Area</span>
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;">
              <i class="fa fa-pie-chart"></i>
              <span>Church Account</span>
            </a>
            <ul class="sub-menu">
              <li><a href="{{route('AccountInArea.create')}}">Add Income</a></li>
              <li><a href="{{route('AccountECArea.create')}}">Add Expenditure</a></li>

              <li>
                <a href="javascript:;">
                  <i class="fa fa-tag"></i>
                  <span>Income</span>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="{{route('AccountInCArea.index')}}">
                  <span>
                    All Categories
                  </span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-tag"></i>
                  <span>Expenditure</span>
                </a>
                <ul class="sub-menu">
                  <li class="active">
                    <a href="{{route('AccountECArea.index')}}">
                      <span>All Categories</span>
                    </a>
                  </li>

                </ul>
              </li>

              <li>
                <a href="">
                  <i class="fa fa-pie-chart"></i>
                  <span>Financial Report</span>

                </a>

                <ul class="sub-menu">
                  <li>
                    <a href="{{route('areaDailyReport')}}">
                      <span>Daily Report</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{route('mreport')}}">
                      <span>Monthly Report</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('miReport')}}">
                      <span>Mid Year Report</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{route('areaYearlyReport')}}">
                      <span>Year Report</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="javascript:;">
                  <i class="fa fa-pie-chart"></i>
                  <span>Tithe Report</span>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="{{route('PostedAreaChart')}}">
                      <span>Daily Tithe</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('PostedMonthlyAreaChart')}}">
                      <span>Monthly Tithe</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('PostedRangeAChart')}}">
                      <span>Range of Tithe</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('PostedYearAreaChart')}}">
                      <span>Yearly Tithe</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- /ui -->

          <!-- forms -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-tint"></i>
              <span>Announcement</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('waiting.index')}}">
                  <span>National Announcement</span>
                </a>
              </li>
              <li>
                <a href="{{route('waiting.create')}}">
                  <span>All Area Announcement</span>
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="{{route('ara-tray')}}">
              <span>Audit Trail</span>
            </a>
          </li>


        </ul>



      @elseif(Auth::user()->isAdminDistrict())

        <ul class="nav">

          <!-- ui -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-flask"></i>
              <span>Dashboard</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('dashboard-d.index')}}">
                  <span>Home</span>
                </a>
              </li>

              <li>
                {{--<a href="{{route('users.create')}}">--}}
                <span>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </span>
                {{--</a>--}}
              </li>
            </ul>
          </li>
          <!-- /ui -->

          <!-- ui -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-tint"></i>
              <span>District Member</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('addnew.index')}}">
                  <span>Members</span>
                </a>
              </li>
              @if(Auth::user()->role_id==7)

                <li>
                  <a href="{{route('districtPost.edit',Auth::user()->id)}}">
                    <span>Anonymous User</span>
                  </a>
                </li>
              @else
              @endif


              <li>
                <a href="{{route('districtPost.create')}}">
                  <span>Add Members</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;">
              <i class="fa fa-toggle-on"></i>
              <span>District</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('districtPost.show',Auth::user()->district_id)}}">
                  <span>All Locals</span>
                </a>
              </li>
            </ul>
          </li>
          <li>
            <a href="javascript:;">
              <i class="fa fa-pie-chart"></i>
              <span>Church Account</span>
            </a>
            <ul class="sub-menu">
              <li><a href="{{route('AccountIn.create')}}">Add Income</a></li>
              <li><a href="{{route('AccountEC.create')}}">Add Expenditure</a></li>
              <li>
                <a href="">
                  <i class="fa fa-tag"></i>
                  <span>Income</span>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="{{route('AccountInC.index')}}">
                  <span>
                    All Categories
                  </span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-tag"></i>
                  <span>Expenditure</span>
                </a>
                <ul class="sub-menu">
                  <li class="active">
                    <a href="{{route('AccountEC.index')}}">
                      <span>All Categories</span>
                    </a>
                  </li>

                </ul>
              </li>

              <li>
                <a href="">
                  <i class="fa fa-pie-chart"></i>
                  <span>Financial Report</span>

                </a>

                <ul class="sub-menu">
                  <li>
                    <a href="{{route('financeDailyReport')}}">
                      <span>Daily Report</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('financeMonthlyReport')}}">
                      <span>Monthly Report</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{route('financeMidYearReport')}}">
                      <span>Mid Year Report</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{url('range')}}">
                      <span>Report Range</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{route('financeYearlyReport')}}">
                      <span>Yearly Report</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-pie-chart"></i>
                  <span>Tithe Report</span>

                </a>

                <ul class="sub-menu">
                  <li>
                    <a href="{{route('dailyReport.index')}}">
                      <span>Daily Tithe Report</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('monthlyReport.index')}}">
                      <span>Monthly Tithe Report</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{route('midYearReport.index')}}">
                      <span>Mid Year Tithe Report</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{route('ReportRange')}}">
                      <span>Report Range</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{route('yearlyReport.index')}}">
                      <span>Yearly Tithe Report</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>

          <!-- /ui -->

          <!-- forms -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-tint"></i>
              <span>Announcement</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('circular1.index')}}">
                  <span>National Announcement</span>
                </a>
              </li>
              <li>
                <a href="{{route('circular1.create')}}">
                  <span>Locals Announcement</span>
                </a>
              </li>

              <li>
                <a href="{{route('onlyAdmins.index')}}">
                  <span>Admins Announcement</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /forms -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-level-down"></i>
              <span>Attendance</span>
            </a>
            <ul class="sub-menu">

              <li>
                <a href="{{route('districtAttendance')}}">
                  <i class=""></i>
                  <span>Report</span>
                </a>
              </li>
            </ul>
          <li>

          <!-- tables -->
          {{--<li class="">--}}
            {{--<a href="javascript:;">--}}
              {{--<i class="fa fa-tag"></i>--}}
              {{--<span>Transfer within District</span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu">--}}
              {{--<li>--}}
                {{--<a href="table-basic.html">--}}
                  {{--<span>Transfer</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="table-responsive.html">--}}
                  {{--<span>Responsive Table</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li class="active">--}}
                {{--<a href="table-datatable.html">--}}
                  {{--<span>Data Tables</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="table-editable.html">--}}
                  {{--<span>Editable Table</span>--}}
                {{--</a>--}}
              {{--</li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          <!-- /tables -->

          {{--<!-- charts -->--}}
          {{--<li>--}}
            {{--<a href="javascript:;">--}}
              {{--<i class="fa fa-pie-chart"></i>--}}
              {{--<span>Charts</span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu">--}}
              {{--<li>--}}
                {{--<a href="charts-flot.html">--}}
                  {{--<span>Flot Charts</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="charts-easypie.html">--}}
                  {{--<span>EasyPie</span>--}}
                {{--</a>--}}
              {{--</li>--}}

              {{--<li>--}}
                {{--<a href="charts-chartjs.html">--}}
                  {{--<span>ChartJs</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="charts-rickshaw.html">--}}
                  {{--<span>Rickshaw</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="charts-nvd3.html">--}}
                  {{--<span>Nvd3</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="charts-c3.html">--}}
                  {{--<span>C3js</span>--}}
                {{--</a>--}}
              {{--</li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          {{--<!-- /charts -->--}}

          {{--<!-- maps -->--}}
          {{--<li>--}}
            {{--<a href="javascript:;">--}}
              {{--<i class="fa fa-map-marker"></i>--}}
              {{--<span>Maps</span>--}}
              {{--<span class="label label-success pull-right">2</span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu">--}}
              {{--<li>--}}
                {{--<a href="map-google.html">--}}
                  {{--<span>Google Maps</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="map-vector.html">--}}
                  {{--<span>Vector Maps</span>--}}
                {{--</a>--}}
              {{--</li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          {{--<!-- /maps -->--}}

          {{--<!-- ready pages -->--}}
          {{--<li>--}}
            {{--<a href="javascript:;">--}}
              {{--<i class="fa fa-send"></i>--}}
              {{--<span>Apps</span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu">--}}
              {{--<li>--}}
                {{--<a href="app-calendar.html">--}}
                  {{--<span>Calendar</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="app-gallery.html">--}}
                  {{--<span>Gallery</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="app-messages.html">--}}
                  {{--<span>Messages</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="app-social.html">--}}
                  {{--<span>Social</span>--}}
                {{--</a>--}}
              {{--</li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          {{--<!-- /ready pages -->--}}

          {{--<!-- extras -->--}}
          {{--<li>--}}
            {{--<a href="javascript:;">--}}
              {{--<i class="fa fa-trophy"></i>--}}
              {{--<span>Extras</span>--}}
              {{--<span class="label label-danger pull-right">new</span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu">--}}
              {{--<li>--}}
                {{--<a href="extras-invoice.html">--}}
                  {{--<span>Invoice</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="extras-timeline.html">--}}
                  {{--<span>Timeline</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="extras-sortable.html">--}}
                  {{--<span>Sortable Lists</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="extras-nestable.html">--}}
                  {{--<span>Nestable Lists</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="extras-search.html">--}}
                  {{--<span>Search</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="extras-signin.html">--}}
                  {{--<span>Signin</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="extras-signup.html">--}}
                  {{--<span>Signup</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="extras-forgot.html">--}}
                  {{--<span>Forgot Password</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="extras-lockscreen.html">--}}
                  {{--<span>Lockscreen</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="extras-404.html">--}}
                  {{--<span>404 Page</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="extras-500.html">--}}
                  {{--<span>500 Page</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="extras-blank.html">--}}
                  {{--<span>Starter Page</span>--}}
                {{--</a>--}}
              {{--</li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          {{--<!-- /extras -->--}}

          {{--<!-- ui kit -->--}}
          {{--<li>--}}
            {{--<a href="widgets.html">--}}
              {{--<i class="fa fa-toggle-on"></i>--}}
              {{--<span>Widgets</span>--}}
            {{--</a>--}}
          {{--</li>--}}
          {{--<!-- /ui kit -->--}}

          {{--<!-- menu levels -->--}}
          {{--<li>--}}
            {{--<a href="javascript:;">--}}
              {{--<i class="fa fa-level-down"></i>--}}
              {{--<span>Menu Levels</span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu">--}}
              {{--<li>--}}
                {{--<a href="javascript:;">--}}
                  {{--<i class="toggle-accordion"></i>--}}
                  {{--<span>Level 1.1</span>--}}
                {{--</a>--}}
                {{--<ul class="sub-menu">--}}
                  {{--<li>--}}
                    {{--<a href="javascript:;">--}}
                      {{--<i class="toggle-accordion"></i>--}}
                      {{--<span>Level 2.1</span>--}}
                    {{--</a>--}}
                    {{--<ul class="sub-menu">--}}
                      {{--<li>--}}
                        {{--<a href="javascript:;">--}}
                          {{--<span>Level 3.1</span>--}}
                        {{--</a>--}}
                      {{--</li>--}}
                      {{--<li>--}}
                        {{--<a href="javascript:;">--}}
                          {{--<span>Level 3.2</span>--}}
                        {{--</a>--}}
                      {{--</li>--}}
                    {{--</ul>--}}
                  {{--</li>--}}
                  {{--<li>--}}
                    {{--<a href="javascript:;">--}}
                      {{--<span>Level 2.2</span>--}}
                    {{--</a>--}}
                  {{--</li>--}}
                {{--</ul>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="javascript:;">--}}
                  {{--<span>Level 1.2</span>--}}
                {{--</a>--}}
              {{--</li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          {{--<!-- menu levels -->--}}

          {{--<!-- emails -->--}}
          {{--<li data-ng-class="{open: $state.includes('app.extras')}">--}}
            {{--<a href="javascript:;">--}}
              {{--<i class="fa fa-envelope"></i>--}}
              {{--<span>Transational Emails</span>--}}
            {{--</a>--}}
            {{--<ul class="sub-menu">--}}
              {{--<li>--}}
                {{--<a href="http://urban.nyasha.me/email/action.html" target="_blank">--}}
                  {{--<span>Action</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="http://urban.nyasha.me/email/alert.html" target="_blank">--}}
                  {{--<span>Alert</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="http://urban.nyasha.me/email/billing.html" target="_blank">--}}
                  {{--<span>Billing</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="http://urban.nyasha.me/email/progress.html" target="_blank">--}}
                  {{--<span>Progress</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="http://urban.nyasha.me/email/survey.html" target="_blank">--}}
                  {{--<span>Survey</span>--}}
                {{--</a>--}}
              {{--</li>--}}
              {{--<li>--}}
                {{--<a href="http://urban.nyasha.me/email/welcome.html" target="_blank">--}}
                  {{--<span>Welcome</span>--}}
                {{--</a>--}}
              {{--</li>--}}
            {{--</ul>--}}
          {{--</li>--}}
          {{--<!-- /emails -->--}}

          {{--<!-- customizer -->--}}
          {{--<li>--}}
            {{--<a href="http://customizer.nyasha.me/#urban" target="_blank">--}}
              {{--<i class="fa fa-sliders"></i>--}}
              {{--<span>Customizer</span>--}}
              {{--<span class="label label-danger pull-right">hot</span>--}}
            {{--</a>--}}
          {{--</li>--}}
          {{--<!-- /customizer -->--}}

          {{--<!-- documentation -->--}}
          {{--<li>--}}
            {{--<a href="docs.html">--}}
              {{--<i class="fa fa-folder"></i>--}}
              {{--<span>Documentation</span>--}}
            {{--</a>--}}
          {{--</li>--}}
          {{--<!-- /documentation -->--}}

          {{--<!-- angular -->--}}
          {{--<li>--}}
            {{--<a href="http://urban.nyasha.me/angular">--}}
              {{--<i class="fa fa-circle"></i>--}}
              {{--<span>Angular Version</span>--}}
            {{--</a>--}}
          {{--</li>--}}
          {{--<!-- /angular -->--}}

        </ul>
      @elseif(Auth::user()->isAdminLocal())

        <ul class="nav">

          <!-- dashboard -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-flask"></i>
              <span>Dashboard</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('local.index')}}">
                  <i class="fa fa-home"></i>
                  <span>Home</span>
                </a>
              </li>

              <li>
                {{--<a href="{{route('users.create')}}">--}}

                <span>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                     <i class="fa fa-sign-out"></i>
                    Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </span>
                {{--</a>--}}
              </li>
            </ul>
          </li>
          <!-- /dashboard -->

          <!-- ui -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-toggle-on"></i>
              <span>Church Members</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('registration.index')}}">
                  <i class="fa fa-users"></i>
                  <span>Active Members</span>
                </a>
              </li>
              @if(Auth::user()->role_id==8)
                <li>
                  <a href="{{route('registration.edit',Auth::user()->id)}}">
                    <i class="fa fa-user-plus"></i>
                    <span>Anonymous User</span>
                  </a>
                </li>
                @else
              @endif

              <li>
                <a href="{{route('nonactive.index')}}">
                  <i class="fa fa-circle-o-notch"></i>
                  <span>None Active Members</span>
                </a>
              </li>
              <li>
                <a href="{{route('nonactive.show','newconvert')}}">
                  <i class="fa fa-connectdevelop"></i>
                  <span>New Convert</span>
                  {{--<span class="label label-primary pull-right">new--}}
                {{--&nbsp--}}
              {{--</span>--}}
                </a>
              </li>

              <li>
                <a href="{{route('nonactive.create')}}">
                  <i class="fa fa-map-marker"></i>
                  <span>Deceased</span>
                </a>
              </li>
              <li>
                <a href="{{route('registration.create')}}">
                  <i class="fa fa-plus"></i>
                  <span>Add New Member</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /ui -->
          <!-- tables -->
          <!-- charts -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-pie-chart"></i>
              <span>Church Account</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('income.create')}}">
                  <i class="fa fa-tag"></i>
                  Add Income
                </a>
              </li>

              <li>
                <a href="{{route('income.index')}}">
                  <i class="fa fa-tag"></i>
                  Add Expenditure</a>
              </li>

              <li>
                <a href="{{route('tithe.create')}}">
                  <i class="fa fa-map-marker"></i>
                  <span>Add Tithe</span>
                </a>
              </li>
              <li>
                <a href="{{route('donation/Pledge')}}">
                  <i class="fa fa-map-marker"></i>
                  <span>Add Donation</span>
                </a>
              </li>
              <li>
                <a href="{{route('titheCharts.index')}}">
                  <i class="fa fa-pie-chart"></i>
                  <span>Tithe Chart</span>
                </a>
              </li>
              <li>
                <a href="{{route('titheCharts.create')}}">
                  <i class="fa fa-pie-chart"></i>
                  <span>Tithe Chart Range</span>
                </a>
              </li>
              <li>
                <a href="{{route('tithe.index')}}">
                  <i class="fa fa-pie-chart"></i>
                  <span>Posted Tithe</span>
                </a>
              </li>
              <li>
                <a href="{{route('onlyDonation')}}">
                  <i class="fa fa-pie-chart"></i>
                  <span>Posted Donation</span>
                </a>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-pie-chart"></i>
                  <span>Income</span>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="{{route('category.index')}}">
                      <i class="fa fa-level-down"></i>

                  <span>All Categories</span>
                    </a>
                  </li>

                  {{--<li>--}}
                    {{--<a href="{{route('sunday.create')}}">--}}
                      {{--<span>Sunday Contribution</span>--}}
                    {{--</a>--}}
                  {{--</li>--}}
                  {{--<li class="active">--}}
                    {{--<a href="">--}}
                      {{--<span>Church Expenses</span>--}}
                    {{--</a>--}}
                  {{--</li>--}}
                  {{--<li>--}}
                    {{--<a href="{{route('services.create')}}">--}}
                      {{--<span>Generated Fund</span>--}}
                    {{--</a>--}}
                  {{--</li>--}}
                </ul>
              </li>
              <li>
                <a href="">
                  <i class="fa fa-tag"></i>
                  <span>Expenditure</span>
                </a>
                <ul class="sub-menu">
                  <li class="active">
                    <a href="{{route('expenditureC.index')}}">
                      <i class="fa fa-level-down"></i>
                      <span>All Categories</span>
                    </a>
                  </li>

                </ul>
              </li>

              <li>
                <a href="">
                  <i class="fa fa-pie-chart"></i>
                  <span>Financial Report</span>

                </a>

                <ul class="sub-menu">
                  <li>
                    <a href="{{route('sunday.index')}}">
                      <i class="fa fa-money"></i>
                      <span>Daily Report</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('services.index')}}">
                      <i class="fa fa-money"></i>
                      <span>Monthly Report</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{route('midyear.index')}}">
                      <i class="fa fa-money"></i>
                      <span>Mid Year Report</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{route('year.index')}}">
                      <i class="fa fa-money"></i>
                      <span>Yearly Report</span>
                    </a>
                  </li>
                </ul>
              </li>

              <li>
                <a href="">
                  <i class="fa fa-pie-chart"></i>
                  <span>Tithe Report</span>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="{{route('titheYearStatement')}}">
                      <i class="fa fa-calendar"></i>
                      <span>January-February</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('titheMonthStatement')}}">
                      <i class="fa fa-calendar"></i>
                      <span>March-April</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{route('mayJune')}}">
                      <i class="fa fa-calendar"></i>
                      <span>May-June</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{route('julyAugust')}}">
                      <i class="fa fa-calendar"></i>
                      <span>July-August</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('septOctober')}}">
                      <i class="fa fa-calendar"></i>
                      <span>September-October</span>
                    </a>
                  </li>

                  <li>
                    <a href="{{route('novDecember')}}">
                      <i class="fa fa-calendar"></i>
                      <span>November-December</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- /charts -->

          <!-- maps -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-map-marker"></i>
              <span>Announcement</span>
              <span class="label label-success pull-right">new
                &nbsp
                {{ App\AreaCircular::whereMonth('created_at',Carbon\Carbon::now()->month)->whereYear('created_at',\Carbon\Carbon::now()->year)->count()}}
              </span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('localPost')}}">
                  <i class="fa fa-send"></i>
                  <span>Post To Local Members</span>
                </a>
              </li>
              <li>
                <a href="{{route('localcircular.create')}}">
                  <i class="fa fa-bookmark-o"></i>
                  <span>Local</span>

                </a>
              </li>
              <li>
                <a href="{{route('localdistrict.index')}}">
                  <i class="fa fa-bookmark-o"></i>
                  <span>District</span>
                  <span class="label label-default pull-right">new
                &nbsp
                {{ App\DistrictCircular::whereMonth('created_at',Carbon\Carbon::now()->month)->whereYear('created_at',\Carbon\Carbon::now()->year)->count()}}
              </span>
                </a>
              </li>
              <li>
                <a href="{{route('nationalcircular.index')}}">
                  <i class="fa fa-book"></i>
                  <span>National</span>
                  <span class="label label-primary pull-right">new
                &nbsp
                {{ App\AreaCircular::whereMonth('created_at',Carbon\Carbon::now()->month)->whereYear('created_at',\Carbon\Carbon::now()->year)->count()}}
              </span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /maps -->

          <!-- extras -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-envelope"></i>
              <span>Messages</span>
              <span class="label label-danger pull-right">new
                &nbsp
               {{App\User::where('local_id',Auth::user()->local_id)->whereMonth('birthDate',Carbon\Carbon::now()->month)
            ->whereday('birthDate',Carbon\Carbon::now()->day)
            ->count()}}
              </span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('birthday.index')}}">
                  <i class="fa fa-birthday-cake"></i>
                  <span>Birthday Notification</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- /extras -->

          <!-- menu levels -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-level-down"></i>
              <span>Attendance</span>
            </a>
            <ul class="sub-menu">

              <li>
                <a href="{{route('attendance.create')}}">
                  <i class="fa fa-reply"></i>
                  <span>Add Attendance</span>
                </a>
              </li>
              <li>
                <a href="{{route('dailyAttendance')}}">
                  <i class="fa fa-reply"></i>
                  <span>Daily Report</span>
                </a>
              </li>

              <li>
                <a href="{{route('attendance.index')}}">
                  <i class="fa fa-reply"></i>
                  <span>Report Range</span>
                </a>
              </li>
            </ul>

          <li>
            <a href="{{route('tithe.create')}}">
              <i class="fa fa-wrench"></i>
              <span>Audit Trail</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('errorLog.index')}}">
                  <i class="fa fa-trash"></i>
                  <span>System Errors</span>
                </a>
              </li>
              <li>
                <a href="{{route('audit-trail.index')}}">
                  <i class="fa fa-trash"></i>
                  <span>System Trails</span>
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;">
              <i class="fa fa-toggle-on"></i>
              <span>Children Ministry</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('ministry.index')}}">
                  <i class="fa fa-users"></i>
                  <span>Active children</span>
                </a>
              </li>
              <li>
                <a href="{{route('deceased-children')}}">
                  <i class="fa fa-map-marker"></i>
                  <span>Deceased Children</span>
                </a>
              </li>
              <li>
                <a href="{{route('ministry.create')}}">
                  <i class="fa fa-plus"></i>
                  <span>Add New Child</span>
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="javascript:;">
              <i class="fa fa-toggle-on"></i>
              <span>Transfer</span>
              <span class="label label-primary pull-right">new
              </span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('transferLocal')}}">
                  <i class="fa fa-users"></i>
                  <span>New Transfer</span>
                </a>
              </li>
              <li>
                <a href="{{route('deceased-children')}}">
                  <i class="fa fa-map-marker"></i>
                  <span>Release</span>
                </a>
              </li>
            </ul>
          </li>

          <li>
            <a href="{{route('text.index')}}">
              <i class="fa fa-line-chart"></i>
              <span class="">Chat Room</span>
            </a>
          </li>

          {{--<li>--}}
          {{--<a href="{{route('tithe.index')}}">--}}
          {{--<i class="fa fa-pie-chart"></i>--}}
          {{--<span>Posted Pledge</span>--}}
          {{--</a>--}}
          {{--</li>--}}
            </ul>

          <!-- /emails -->

       @elseif(Auth::user()->isMember())

        <ul class="nav">

          <!-- dashboard -->
          <li>
            <a href="javascript:;">
              <i class="fa fa-flask"></i>
              <span>Dashboard</span>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="">
                  <span>Home</span>
                </a>
              </li>

              <li>
                {{--<a href="{{route('users.create')}}">--}}
                <span>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                </span>
                {{--</a>--}}
              </li>
            </ul>
          </li>
          <!-- /dashboard -->

          <!-- ui -->
          <li>
            <a href="{{route('MDashboard.create')}}">
              <i class="fa fa-toggle-on"></i>
              <span>Profile</span>
            </a>
          <li>
            <a href="">
              <i class="fa fa-toggle-on"></i>
              <span>Password Reset</span>
            </a>
          </li>
          <!-- /ui -->


          <!-- tables -->


          <!-- charts -->
          <li>
            <a href="{{route('MDashboard.index')}}">
              <i class="fa fa-pie-chart"></i>
              <span>Tithe</span>
            </a>
          </li>
          <li>
                <a href="">
                  <i class="fa fa-tag"></i>
                  <span>Announcement</span>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="{{route('tolocalAnnouncement')}}">
                      <span>Church Announcement</span>
                    </a>
                  </li>
                  <li class="">
                    <a href="">
                      <span>District Announcement</span>
                    </a>
                  </li>
                  <li class="active">
                    <a href="">
                      <span>Area Announcement</span>
                    </a>
                  </li>
                  <li class="active">
                    <a href="{{route('membersAnnouncement')}}">
                      <span>National Announcement</span>
                    </a>
                  </li>
                </ul>
              </li>
                </ul>
      @endif
      </ul>
    </nav>
    <!-- /main navigation -->
  </div>
  <!-- /sidebar panel -->