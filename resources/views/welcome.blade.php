@extends('layouts.app')<!--auth check をつけたよ　（りさ）-->

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
<<<<<<< HEAD
        <div class="center jumbotron">
            <div class="text-center">
                <h1>HiiMa</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
=======
        <div class="text-center">
                <p class="title-logo"><img src="image/titlelogo.png"></p>
                <p class="hiima-kun"><a href="{{Route('signup.get')}}"><img src="image/hiima.logo.png" alt=""></a></p>
>>>>>>> 1117b0df87b1d2e629c4947f4adb10fabb73baa7
        </div>
    @endif
@endsection