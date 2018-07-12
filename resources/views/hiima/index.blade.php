@extends('layouts.app')
@section('content')<!--以下追加したよ。かほ-->

<!doctype html>

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
@endsection