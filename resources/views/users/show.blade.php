<!--追加りな-->
@extends('layouts.app')
<!doctype html> 

@section('content')

<!doctype html> 
<link rel="stylesheet" href="{{ secure_asset('css/show.css') }}">

<br>
<br>

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
          <div class="text">
               @include('user_follow.follow_button', ['user' => $user])
            <h4>profile</h4>
           {{Form::open (['route' => ['users.edit', $user->id]])}}
                            <!--body plaeholder追加、かほ-->
                <div class="form-group @if(!empty($errors->first('body'))) has-error @endif">
                @if($user->id == Auth::id())
                    <textarea input type="textarea" placeholder="みんなに好きなことを伝えよう！" name="body"
                     class="form-control">{{$user->profile}}</textarea> 
                @else
                    <div> {{$user->profile}}</div> 
                @endif

                    <!--textarea追加かほ-->
                    <span class="help-block">{{$errors->first('body')}}</span>
                </div>
                <div class="btn"></div>
                @if($user->id == Auth::id())
                {!! Form::submit('update', ['class' => 'btn btn-warning btn-lg']) !!}
                @endif
            <!--</form>-->
           </div>
            {{Form::close()}}
            
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                
            
                <!--ここからhistory追加-->
                <!--足したよあき-->
                
                
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }} "><a href="{{ route('users.show', ['id' => $user->id]) }}">History<span class="badge"> {{ $count_histories }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followings') ? 'active' : '' }} "><a href="{{ route('users.followings', ['id' => $user->id]) }}">Followings <span class="badge">{{ $count_followings }}</span></a></li>
                <li role="presentation" class="{{ Request::is('users/*/followers') ? 'active' : '' }} "><a href="{{ route('users.followers', ['id' => $user->id]) }}">Followers <span class="badge">{{ $count_followers }}</span></a></li>
            </ul>
        </div>

        <div class="col-xs-8 col-offset-xs-4">

        @foreach($histories->get() as $h)
        
            <!--{{ App\User::find($h->user_id) }}-->
            <!--{{ App\Post::find($h->post_id) }}-->
            <!--{{ App\Tag::find($h->tag_id) }}-->


        <div style="display:block; margin-top:40px;">

        <div style="display:inline-block; ">
     
                <img class="media-object img-rounded img-responsive" src="{{ asset(App\User::image_map($h->user_id))}}" alt="" style='width:100px;'>
      </div>
        <div style="display:inline-block; margin-top:30px;">
      
        <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span>: {{App\User::find($h->user_id)->nickname}}</p> <!--追加したよ。ばなな-->
        <p><span class="glyphicon glyphicon-tags" aria-hidden="true"></span>: @foreach ($h->tags as $tag) {{ $tag->name }} @endforeach </p>
        <p><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>: {{ App\Post::find($h->id)->body }}</p>
        <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span>: {{ App\Post::find($h->id)->created_at }}</p>
      </div>
      </div>



        @endforeach
        </div>
    </div>
@endsection
                
                
                
    
