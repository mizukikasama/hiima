@extends('layouts.app')
@section('content')

<!--以下追加したよ。かほ-->

<!doctype html>
<html>
<head>
    <div class="col-xs-8 col-xs-offset-2">
        <meta charset="utf-8">
        <title>HiiMa</title>
    </div>
</head>

<body>
    <form method="post">
        {{ csrf_field() }}
        @foreach ($tags as $tag)
            <input type="checkbox" name="tags[]" value="{{ $tag->id }}">{{ $tag->name }}
        @endforeach
        <input name="body">
        <button>ヒマ</button>
    </form>
    @foreach ($posts as $post)
        <hr>
        <p>Tags: @foreach ($post->tags as $tag) {{ $tag->name }} @endforeach </p>
        <p>{{ $post->body }}</p>
    @endforeach
</body>
</html>