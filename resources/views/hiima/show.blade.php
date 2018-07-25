<link rel="stylesheet" href="{{ secure_asset('css/hiima.css') }}">

@extends('layouts.app')
@section('content')<!--内容を確認するよリサ-->

<<<<<<< HEAD
    <h1>id = {{ $post->id }}のヒマ詳細表示</h1>

    <!-- table -->
    <table class="table table-striped">
         <tr>
            <th>id</th>
            <td>{{ $post->id }}</td>
        </tr>
        <tr>
            <th>提案者</th>
            <td>
               {{ $user_id[0]->nickname }}
            </td>
        </tr> 
        <tr>
            <th>場所</th>
            <td>
                @foreach($tags as $tag)
                    {{ $tag->name }}  
                @endforeach
            </td>
        </tr>               
        <tr>
            <th>したいこと</th>
            <td>{{ $post->body }}</td>
        </tr> 
        <tr>
            <th>参加者</th>
            <td>

            </td>
        </tr> 
    </table>
    
    @endsection

<div class="sample_box3_1">
    <span class="sample_box_title">
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
