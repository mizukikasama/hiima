<!--ここにあきが作った画像をはりつける-->
@extends('layouts.app')
@section('content')

<div id="fullscreen">
    <img src="{{ asset('image/hajimete1.png')}}">
</div>

{!! link_to_route('hajimete.hajimete2', 'next', '',  ['class' => 'button']) !!}

@endsection
