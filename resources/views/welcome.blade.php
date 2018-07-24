@extends('layouts.app')<!--auth check をつけたよ　（りさ）-->

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
    
    <!--ばななへ　このしたは背景固定のやつ（りな）-->
      <main>
    <div class="cd-fixed-bg cd-bg-1">
         <!--ばななへ　ここまでだよ（りな）-->
    
    
        <div class="text-center">
                <p class="title-logo"><img src="image/titlelogo.png"></p>
                <p class="hiima-kun"><a href="{{Route('signup.get')}}"><img src="image/hiima.logo.png" alt=""></a></p>
        </div>
    @endif
@endsection