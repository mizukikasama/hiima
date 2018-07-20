<!--追加りな-->
@extends('layouts.app')

@section('content')
<!doctype html> 
<link rel="stylesheet" href="{{ secure_asset('css/hiima.css') }}">
<p class= "pagetop">
    <a href="#top" title="ページトップへ戻る">
    <img src="css/hiima.logo.png"/>
    </a>
</p>
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->nickname }}</h3>
                </div>
                <div class="panel-body">
                    <!--この下変更しましたりな（アイコン設定）-->
                <img class="media-object img-rounded img-responsive" src="{{ asset(App\User::image_map($user->id))}}" alt="">
                </div>
            </div>
            @include('user_follow.follow_button', ['user' => $user])
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <!--<li><a href="#">TimeLine</a></li>-->
                <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}">Followings <span class="badge">{{ $count_followings }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}">Followers <span class="badge">{{ $count_followers }}</span></a></li>
                <!--<li><a href="#">Followers< /a></li>-->
                <!--<li><a href="#">Followers< /a></li>-->
            </ul>
        </div>
    </div>
@endsection