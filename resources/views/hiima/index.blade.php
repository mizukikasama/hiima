@extends('layouts.app')
@section('content')<!--以下追加したよ。かほ-->

<!doctype html> <!--エラー追加したよ。りさ-->
<link rel="stylesheet" href="{{ secure_asset('css/hiima.css') }}">
<p class= "pagetop">
    <a href="#top" title="ページトップへ戻る">
    <img src="css/hiimafinal.jpg"/>
    </a>
</p>
<h1 id="top">まずは自分のヒマを提供しよう！</h1>
<h5>場所を選択してね</h5>
   {{$errorMessage}}
   {{Form::open(['route'=>'hiima.store'])}}
    <!--<form method="post" action=hiima.store>-->
        {{ csrf_field() }}
        <!--tag-->
        <div class="form-group @if(!empty($errors->first('name'))) has-error @endif">
            @foreach ($tags as $tag)
            <label class="label-checkbox">
                    <!--<input type="checkbox" name="tags" value="{{ $tag->id }}">-->
                    <!--<span class="lever">{{ $tag->name }}</span>-->
                {!! Form::label('tags[]',' ') !!}
                {!! Form::checkbox('tags[]',$tag->id, null ) !!}<span class="lever">{{ $tag->name }}</span>
            </label>
            <span class="help-block">{{$errors->first('name')}}</span>
            @endforeach
        </div>
        <!--body plaeholder追加、かほ-->
        <div class="form-group @if(!empty($errors->first('body'))) has-error @endif">
            <textarea input type="textarea" placeholder="今日何したい？(例:2人でパンケーキ食べたい)" name="body" value="{{old('name')}}" class="form-control"></textarea> 
            <!--textarea追加りな-->
            <span class="help-block">{{$errors->first('body')}}</span>
        </div>
        {!! Form::submit('ヒマ', ['class' => 'btn btn-warning btn-lg']) !!}
    <!--</form>-->
    {{Form::close()}}
    
    @foreach ($posts as $post)
    <div class ="posts">
                <?php 
                $user_id = $post->tags()->get()[0]->pivot->user_id;
               // echo App\User::find($user_id)->name;
                ?>
        <p>id: {!! link_to_route('hiima.show', $post->id, ['id' => $post->id]) !!}</p>
        <p>ユーザー名: {!! link_to_route('users.show', $userIdFromPostId[''.$post->id]??'', ['id' => $user_id]) !!}</p> <!--追加したよ。ばなな-->
        <p>カテゴリー: @foreach ($post->tags as $tag) {{ $tag->name }} @endforeach </p>
        <p>内容: {{ $post->body }}</p>
        <!--<p> {!! link_to_route('users.show', $post->body, ['id' => $post]) !!}</p>-->
         <p>投稿時間: {{ $post->created_at }}</p>
            <div>

                @if (Auth::user()->id == $user_id)
                    {!! Form::open(['route' => ['hiima.destroy', $post->id], 'method' => 'delete']) !!}
                    
                     <!--{{ Form::hidden('invisible',$post->id)}}-->
                    
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
    </div>
    @endforeach
@endsection
