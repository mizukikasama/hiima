<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HiiMa</title>

        <!-- Bootstrap -->
        <!--りなhajimete.cssへのlink rel 追加-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="shortcut icon" href="https://hiima.herokuapp.com/" type="image/hiima.favicon.png" />
        
        <link rel="stylesheet" href="{{ secure_asset('css/hajimete.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/icon.css') }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--<link rel="stylesheet" href="{{ secure_asset('css/hiima.css') }}">　<!--ミヅキチーム-->
    </head>
    <body>
        @include('commons.navbar')

        <div class="container">
            @include('commons.error_messages')

            @yield('content')
            
            
        </div>
        
    </body>
</html>