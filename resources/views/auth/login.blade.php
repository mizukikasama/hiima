<link rel="stylesheet" href="{{ secure_asset('css/register_login.css') }}">
   
@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Log In</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('hiima_id', 'User ID') !!}
                    {!! Form::text('hiima_id', old('hiima_id'), ['class' => 'form-control'])!!}
                </div>
                    

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
            <br>
            <p>New user? >> {!! link_to_route('signup.get', 'Sign up now!!') !!}</p>
        </div>
    </div>
@endsection