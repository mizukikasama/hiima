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
        <tr>
            <th>参加者</th>
            <td>
            @foreach($user_id as $user)
                {{ $user->nickname }}  
            @endforeach
            </td>
        </tr> 
    </table>
    
    {!! link_to_route('hiima.show', '一緒にヒマをつぶそう', ['id' => $post->id], ['class' => 'btn btn-default']) !!}

    
@endsection