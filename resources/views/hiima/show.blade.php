@extends('layouts.app')
@section('content')<!--内容を確認するよリサ-->

    <h1>id = {{ $post->id }}のヒマ詳細表示</h1>

    <!-- table -->
    <table class="table table-striped">
         <tr>
            <th>id</th>
            <td>{{ $post->id }}</td>
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
        
        <!--<tr><td>タグ</td><td>{{$inputs["name"]??""}}</tr>-->
        <!--<tr><td>内容</td><td>{{$inputs["body"]??""}}</tr>-->
        
    </table>

@stop