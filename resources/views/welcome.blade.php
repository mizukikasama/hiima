<link rel="stylesheet" href="{{ secure_asset('css/welcome.css') }}">
@extends('layouts.app')<!--auth check をつけたよ　（りさ）-->

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
        <div class="text-center">
                <p class="title-logo"><img src="image/titlelogo.png"></p>
                <p class="hiima-kun"><a href="{{Route('signup.get')}}"><img src="image/hiima.logo.png" alt="今すぐ始める"></a></p>
        </div>
        
        
        <!--<div class="signup button">-->
        <!--     {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn-warning btn btn-lg gradient']) !!}-->
        <!--</div>-->
    @endif
@endsection