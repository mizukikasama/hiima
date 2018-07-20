
<!--ここにあきが作った画像をはりつける-->
@extends('layouts.app')
@section('content')

<div id="fullscreen">
    <img src="{{ asset('image/hajimete2.png')}}">
</div>


{!! link_to_route('hajimete.hajimete3', 'next', '',  ['class' => 'button']) !!}

@endsection
