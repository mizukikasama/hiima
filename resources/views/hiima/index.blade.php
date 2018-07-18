@extends('layouts.app')
@section('content')<!--以下追加したよ。かほ-->

<!doctype html><!--エラー追加したよ。りさ-->
<h1>今日何したい？</h1>
<h2>場所を選択してね</h2>
   {{$errorMessage}}
    <form method="post">
        {{ csrf_field() }}
        <!--tag-->
        <div class="form-group @if(!empty($errors->first('name'))) has-error @endif">
            @foreach ($tags as $tag)
            <input type="checkbox" name="tags" value="{{ $tag->id }}">{{ $tag->name }}
            <!--<input class=”top_title” name=”title” type=”text” value=”WinRoad徒然草“>-->
            <span class="help-block">{{$errors->first('name')}}</span>
            @endforeach
        </div>
        
        <!--body plaeholder追加、かほ-->
        <div class="form-group @if(!empty($errors->first('body'))) has-error @endif">
            <input type="text" placeholder="今日何したい？(例:2人でパンケーキ食べたい)" name="body" value="{{old('name')}}" class="form-control">
            <span class="help-block">{{$errors->first('body')}}</span>
        </div>
        
        <button>ヒマ</button>
    </form>
    
    @foreach ($posts as $post)
        <hr>
        <p>Users: {{$userIdFromPostId[''.$post->id]??''}}</p> <!--追加したよ。ばなな-->
        <p>Tags: @foreach ($post->tags as $tag) {{ $tag->name }} @endforeach </p>
        <p>{{ $post->body }}</p>
    @endforeach
@endsection