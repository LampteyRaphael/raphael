@extends('layouts.app')

@section('content')
    @if($users)
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                        <th>Presiding Elders</th>
                        <th>Areas</th>
                        <th>Districts</th>
                        <th>Locals</th>
                        <th>Number Of Years In Services</th>
                    </thead>
                    <tbody>
                    <div class="table-responsive">
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->NameOfPresidingElder? $user->NameOfPresidingElder:"-"}}</td>
                                <td>
                                    @if($user->area_id)
                                      @foreach((App\Area::where("id",$user->area_id)->pluck('name')) as $area)
                                          {{$area}}
                                      @endforeach
                                     @else
                                    @endif
                                </td>
                                <td>
                                    @if($user->district_id)
                                        @foreach((App\District::where("id",$user->district_id)->pluck('name')) as $district)
                                            {{$district}}
                                        @endforeach
                                    @else
                                    @endif
                                </td>
                                <td>
                                    @if($user->local_id)
                                        @foreach((App\Local::where("id",$user->local_id)->pluck('name')) as $local)
                                            {{$local}}
                                        @endforeach
                                     @else
                                    @endif
                                </td>
                                <td>
                                    {{strtoupper(Carbon\Carbon::now()->parse(str_replace('/','-',$user->dateAppointPresiding))->diff(Carbon\Carbon::now())
                                     ->format('%y years,%m months,%d days'))}}
                                </td>
                            </tr>
                        @endforeach
                    </div>

                    </tbody>
                </table>

                {{$users->links()}}
            </div>

        </div>
    @endif



@endsection
