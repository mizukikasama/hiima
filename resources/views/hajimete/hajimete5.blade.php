<!--ここにあきが作った画像をはりつける-->
@extends('layouts.app')
@section('content')

<div id="fullscreen">
    <img src="{{ asset('image/hajimete5.png')}}">
</div>

<!--<a href="#" class="havefun_button">はじめる</a>-->


{!! link_to_route('hiima.index', 'はじめる', '',  ['class' => 'havefun_button']) !!}

<!--戻るボタン-->
{!! link_to_route('hajimete.hajimete4', 'back', '',  ['class' => 'back_btn']) !!}

@endsection