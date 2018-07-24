<link rel="stylesheet" href="{{ secure_asset('css/hiima.css') }}">

@extends('layouts.app')
@section('content')<!--内容を確認するよリサ-->


<!--この下追加（りな）-->

<div class="sample_box3_1">
    
    <!--「りささんがやりたいこと」と表示させたい（りな）-->
    
    　<span class="sample_box_title"> {{ $user_id[0]->nickname }}のやりたいこと</span>  
    　
    　<!--このなかに写真も追加させたい（りな）-->
    　
    <ol>
            
      <li> {{ $user_id[0]->nickname }}
      </li>
          <br>
      
      <li> @foreach($tags as $tag)
             {{ $tag->name }}  
           @endforeach
      </li>
          <br>
     
      <li>{{ $post->body }}
      </li>
          <br>
  
      <li> {{ $user_id[0]->nickname }}の過去のヒマ履歴を見てみる（ここからリンクさせたい）
      </li>
          <br>
   
    </ol>
    
</div>





    <!--<h1>id = {{ $post->id }}のヒマ詳細表示</h1>-->

    <!-- table -->
    <!--<table class="table table-striped">-->
    <!--     <tr>-->
    <!--        <th>id</th>-->
    <!--        <td>{{ $post->id }}</td>-->
    <!--    </tr>-->
    <!--    <tr>-->
    <!--        <th>提案者</th>-->
    <!--        <td>-->
    <!--           {{ $user_id[0]->nickname }}-->
    <!--        </td>-->
    <!--    </tr> -->
    <!--    <tr>-->
    <!--        <th>場所</th>-->
    <!--        <td>-->
    <!--            @foreach($tags as $tag)-->
    <!--                {{ $tag->name }}  -->
    <!--            @endforeach-->
    <!--        </td>-->
    <!--    </tr>               -->
    <!--    <tr>-->
    <!--        <th>したいこと</th>-->
    <!--        <td>{{ $post->body }}</td>-->
    <!--    </tr> -->
    <!--    <tr>-->
    <!--        <th>参加者</th>-->
    <!--        <td>-->

    <!--        </td>-->
    <!--    </tr> -->
    <!--</table>-->
    


    
@endsection