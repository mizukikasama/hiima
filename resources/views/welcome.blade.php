@extends('layouts.app')<!--auth check をつけたよ　（りさ）-->

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
        <div class="center jumbotron" style="background-color:rgba(255,255,255,0.5)">
            <div class="text-center">
                <p class="title-logo"><img src="image/titlelogo.png"></p>
                <p class="hiima-kun"><img src="image/hiima.logo.png"></p>
            </div>
        </div>
        
        <div class="signup button">
            <div class="text-center">
                 {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn-warning btn btn-lg gradient']) !!}
            </div>
        </div>
    @endif
@endsection