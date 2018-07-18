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
<<<<<<< HEAD
            <input type="checkbox" name="tags" value="{{ $tag-> id}}">{{ $tag->name }}
=======
            <input type="checkbox" name="tags" value="{{ $tag->id }}">{{ $tag->name }}
>>>>>>> aaf1c5e8798708c3654222b7e3eeaca43a7aeadc
            <!--<input class=”top_title” name=”title” type=”text” value=”WinRoad徒然草“>-->
            <span class="help-block">{{$errors->first('name')}}</span>
            @endforeach
        </div>
        
        <!--body plaeholder追加、かほ-->
        <div class="form-group @if(!empty($errors->first('body'))) has-error @endif">
            <textarea input type="textarea" placeholder="今日何したい？(例:2人でパンケーキ食べたい)" name="body" value="{{old('name')}}" class="form-control"></textarea> 
            <!--textarea追加りな-->
            <span class="help-block">{{$errors->first('body')}}</span>
        </div>
        
        <button>ヒマ</button>
    </form>
    
    @foreach ($posts as $post)
        <hr>
        <p>ユーザー名: {{$userIdFromPostId[''.$post->id]??''}}</p> <!--追加したよ。ばなな-->
        <p>カテゴリー: @foreach ($post->tags as $tag) {{ $tag->name }} @endforeach </p>
        <p>内容: {{ $post->body }}</p>
         <p>投稿時間: {{ $post->created_at }}</p>


            <div>
                <?php 
                $user_id = $post->tags()->get()[0]->pivot->user_id;
               // echo App\User::find($user_id)->name;
                ?>
                @if (Auth::user()->id == $user_id)
                    {!! Form::open(['route' => ['hiima.destroy', $post->id], 'method' => 'delete']) !!}
                    
                     <!--{{ Form::hidden('invisible',$post->id)}}-->
                    
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
    @endforeach


         

@endsection


