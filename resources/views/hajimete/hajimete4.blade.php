<!--ここにあきが作った画像をはりつける-->
@extends('layouts.app')
@section('content')

<div id="fullscreen">
    <img src="{{ asset('image/hajimete4.png')}}">
</div>


{!! link_to_route('hajimete.hajimete5', 'next', '',  ['class' => 'button']) !!}

<!--戻るボタン-->
{!! link_to_route('hajimete.hajimete3', 'back', '',  ['class' => 'back_btn']) !!}

@endsection