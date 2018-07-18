@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Sign up</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('nickname', 'ニックネーム') !!}
                    <br>
                        <p>例: ばなな</p>
                    {!! Form::text('nickname', old('nickname'), ['class' => 'form-control']) !!}
                </div>
                
                 <div class="form-group">
                    {!! Form::label('hiima_id', 'ID') !!}
                    <br>
                        <p>例: nana7e</p>
                    {!! Form::text('hiima_id', old('hiima_id'), ['class' => 'form-control']) !!}
                </div>               
                

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    <br>
                        <p>6文字以上入力してください</p>
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード確認用') !!}
                        <br>
                        <p>確認のためもう一度入力してください</p>
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Sign up', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection