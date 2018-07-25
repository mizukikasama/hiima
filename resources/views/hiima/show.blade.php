<link rel="stylesheet" href="{{ secure_asset('css/hiima.css') }}">

@extends('layouts.app')
@section('content')<!--内容を確認するよリサ-->

<div class="sample_box3_1">
    <span class="sample_box_title">
        <br>
        <h1>  {{ $user_id[0]->nickname }}のやりたいこと</h1>
        
    </span>
    <br>
    <br>
<ol>
        <li>場所:@foreach($tags as $tag){{ $tag->name }}  @endforeach</li>    
        <li>カテゴリー:{{ $category->name }}</li>
        <li>したいこと:{{ $post->body }}</li>
        <li>参加者:</li>
</ol>
    
</div>
@endsection