@extends('layouts.app')
@section('content')<!--以下追加したよ。かほ-->

<!doctype html> <!--エラー追加したよ。りさ-->
<link rel="stylesheet" href="{{ secure_asset('css/hiima.css') }}">
<p class= "pagetop">
    <a href="#top" title="ページトップへ戻る">
    <img src="css/hiima.logo.png"/>
    </a>
</p>
<h1 id="top">
    @if (Auth::check())
                                <p>{!! link_to_route('users.show', Auth::user()->nickname, ['id' => Auth::id()]) !!}さんはどこで何がしたい？</p>
                            </ul>
                        </li>
                    @else
                        <li>{!! link_to_route('signup.get', 'Signup') !!}</li>
                        <li>{!! link_to_route('login', 'Login') !!}</li>
                    @endif
                        

</h1>

   {{Form::open(['route'=>'hiima.store'])}}
    <!--<form method="post" action=hiima.store>-->
        {{ csrf_field() }}
       
       
       <!--tag-->
       <div class = "rina_aki">
        <div class="form-group @if(!empty($errors->first('name'))) has-error @endif">
            
            <p>*入力が必須の項目です。</p>
           <h6>{{$errorMessage}}</h6>
           <br>

        <h5>1.どこで(複数選択OK)*</h5>

<!--<div class ="box">-->
<!--ここから下はチェックボックス-->
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
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            
            <h5>2.何を(複数選択不可)*</h5>


 <!--この下はラジオボックス-->
            @foreach ($categories as $category)
            <label class="label-radio">
                
                {!! Form::label('categories[]',' ') !!}
                {!! Form::radio('categories[]',$category->id, null ) !!}<span class="lever">{{ $category->name }}</span>
            </label>
            <span class="help-block">{{$errors->first('name')}}</span>
            @endforeach


           <!--</div> -->
           <br>
           <br>
           <br>
           <br>
           
            <h5>3.詳細*</h5>
    
        <!--body plaeholder追加、かほ-->
        <div class="form-group @if(!empty($errors->first('body'))) has-error @endif">
            <textarea input type="textarea" placeholder="もっと詳しく！(例:2人でパンケーキ食べたい)" name="body" value="{{old('name')}}" class="form-control"></textarea> 
            <!--textarea追加りな-->
            <span class="help-block">{{$errors->first('body')}}</span>
        </div>
        {!! Form::submit('ヒマ', ['class' => 'btn btn-warning btn-lg active']) !!}
    <!--</form>-->
      
    {{Form::close()}}
  </div>  
  
    
    @foreach ($posts as $post)
        <?php
        $category = $post->category_id;
        $imgPath="";
        if($category == 1) {
            $imgPath = 'image/category_cafe.jpg';
        } elseif($category == 2) {
             $imgPath = 'image/category_nomi.jpeg';
        }
        elseif($category == 3) {
             $imgPath = 'image/category_movie.jpg';
        }
        elseif($category == 4) {
             $imgPath = 'image/category_shopping.jpg';
        }
        elseif($category == 5) {
             $imgPath = 'image/category_karaoke.jpg';
        }
        elseif($category == 6) {
             $imgPath = 'image/category_gym.jpg';
        }
        elseif($category == 7) {
             $imgPath = 'image/category_camp.jpg';
        }
        elseif($category == 8) {
             $imgPath = 'image/category_game.jpg';
        }
        elseif($category == 9) {
             $imgPath = 'image/category_firework.jpg';
        }
        elseif($category == 10) {
             $imgPath = 'image/category_disney.jpg';
        }
        
        elseif($category == 11) {
             $imgPath = 'image/category_beef.jpg';
        }
        elseif($category == 12) {
             $imgPath = 'image/category_fish.jpg';
        }
        elseif($category == 13) {
             $imgPath = 'image/category_pizza.jpg';
        }
        elseif($category == 14) {
             $imgPath = 'image/category_tyuka.jpg';
        }
                elseif($category == 15) {
             $imgPath = 'image/category_washoku.jpg';
        }
    ?>
    
    <div class ="posts">
                <?php 
                $user_id = $post->tags()->get()[0]->pivot->user_id;
                $user = App\User::find($post->user_id);
                // $user = $post->users()->get();
               // echo App\User::find($user_id)->name;
                ?>

        <p>
            <img src="{{$imgPath}}" width="400px" height="300px" alt="photo">
        </p>
        
        <!--<p>詳しくは: {!! link_to_route('hiima.show', $post->id, ['id' => $post->id]) !!}</p>-->
        <br>
        <a href="{{Route('hiima.show', $post->id)}}"><img src="image/mini.hiima1.png" width="150px" height="50px" alt="詳しくはコチラ" class="kochira_img" ></a>

     
    

 
        
        <p><span class="glyphicon glyphicon-user" aria-hidden="true"></span> : {!! link_to_route('users.show', $user->nickname, ['id' => $post->user_id]) !!}</p> <!--追加したよ。ばなな-->
        <br>
        <p><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> : @foreach ($post->tags as $tag) {{ $tag->name }} @endforeach</p>
        <br>
        <p><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> :{!! link_to_route('hiima.show', $post->body, ['id' => $post->id]) !!}</p>
        <br>
        <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span> : {{ $post->created_at }}</p>
         
            <div>

                @if (Auth::user()->id == $post->user_id)
                    {!! Form::open(['route' => ['hiima.destroy', $post->id], 'method' => 'delete']) !!}
                    
                     <!--{{ Form::hidden('invisible',$post->id)}}-->
                    
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                    {!! Form::close() !!}
                @endif
            </div>
    </div>
    @endforeach
@endsection
