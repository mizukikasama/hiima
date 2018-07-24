<!--追加りな-->
@extends('layouts.app')

@section('content')
<!doctype html> 
<<<<<<< HEAD
<link rel="stylesheet" href="{{ secure_asset('css/hiima.css') }}">
<p class= "pagetop">
    <a href="#top" title="ページトップへ戻る">
    <img src="css/hiima.logo.png"/>
    </a>
</p>
=======
<link rel="stylesheet" href="{{ secure_asset('css/show.css') }}">
>>>>>>> 2818b0998470c5476bb3677eecea048e406c3749
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->nickname }}</h3>
                </div>
                <div class="panel-body">
                    <!--この下変更しましたりな（アイコン設定）-->
                <img class="media-object img-rounded img-responsive" src="{{ asset(App\User::image_map($user->id))}}" alt="">
                </div>
            </div>
                    <!--body plaeholder追加、かほ-->
        <div class="form-group @if(!empty($errors->first('body'))) has-error @endif">
            <textarea input type="textarea" placeholder="コメント" name="body" value="{{old('name')}}" class="form-control"></textarea> 
            <!--textarea追加かほ-->
            <span class="help-block">{{$errors->first('body')}}</span>
        </div>
        {!! Form::submit('編集', ['class' => 'btn btn-warning btn-lg']) !!}
    <!--</form>-->
    {{Form::close()}}
            @include('user_follow.follow_button', ['user' => $user])
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <!--ここからhistory追加-->
                <!--足したよあき-->
                
                    
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}"><a href="{{ route('users.show', ['id' => $user->id]) }}">History <span class="badge">{{ $count_histories }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }}"><a href="{{ route('users.followings', ['id' => $user->id]) }}">Followings <span class="badge">{{ $count_followings }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }}"><a href="{{ route('users.followers', ['id' => $user->id]) }}">Followers <span class="badge">{{ $count_followers }}</span></a></li>
                
               
                <!--<li><a href="#">Followers< /a></li>-->
                <!--<li><a href="#">Followers< /a></li>-->
            </ul>
        </div>
        @foreach($histories as $h)
        <!--    {{ App\User::find($h->user_id) }}-->
        <!--    {{ App\Post::find($h->post_id) }}-->
        <!--    {{ App\Tag::find($h->tag_id) }}-->
        <!--<hr>-->
       <div style="display:block; margin-top:40px;">
       
        <div style="display:inline-block;">
     
                <img class="media-object img-rounded img-responsive" src="{{ asset(App\User::image_map($user->id))}}" alt="" style='width:100px;'>
      </div>
        <div style="display:inline-block; margin-top:30px;">
            
           
      
        <p>ユーザー名: {{App\User::find($h->user_id)->nickname}}</p> <!--追加したよ。ばなな-->
        <p>カテゴリー:  {{App\Tag::find($h->tag_id)->name}} </p>
        <p>内容: {{ App\Post::find($h->post_id)->body }}</p>
         <p>投稿時間: {{ App\Post::find($h->post_id)->created_at }}</p>
      </div>
      </div>



        @endforeach
    </div>
@endsection
                
                
                
    
