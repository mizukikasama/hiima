<!--ここにあきが作った画像をはりつける-->
@extends('layouts.app')
@section('content')

<div id="fullscreen">
    <img src="{{ asset('image/hajimete3.png')}}">
</div>


{!! link_to_route('hajimete.hajimete4', 'next', '',  ['class' => 'button']) !!}

<!--戻るボタン-->
{!! link_to_route('hajimete.hajimete2', 'back', '',  ['class' => 'back_btn']) !!}

@endsection
