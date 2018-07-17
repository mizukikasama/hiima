@extends('layouts.app')
@section('content')<!--内容を確認するよリサ-->

    <h1>内容表示</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/form" class="btn btn-primary" style="margin:20px;">フォームに戻る</a>
        </div>
    </div>

    <!-- table -->
    <table class="table table-striped">
        <tr><td>タグ</td><td>{{$inputs["name"]}}</tr>
        <tr><td>内容</td><td>{{$inputs["body"]}}</tr>
    </table>

@stop