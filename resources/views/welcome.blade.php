<link rel="stylesheet" href="{{ secure_asset('css/welcome.css') }}">

<!--<link rel="stylesheet" href="{{ secure_asset('css/scroll.css') }}">-->

@extends('layouts.app')<!--auth check をつけたよ　（りさ）-->

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
    
    <!--ばななへ　このしたは背景固定のやつ（りな）-->
<main>
      <div class="cd-fixed-bg cd-bg-1">
         <!--ばななへ　ここまでだよ（りな）-->
    
    
        <div class="text-center">
                <p class="title-logo"><img src="image/titlelogo.png"></p>
                <p class="hiima-kun"><a href="{{Route('signup.get')}}"><img src="image/hiima.logo.png" alt=""></a></p>
        
        <!--スクロールのやつ（りな）-->
            <div class = "scroll-button">   
              <a><span></span><span></span><span></span>Learn More</a>
            </div>
        </div>
     <!--背景を固定したスクロールできるやつ（りな）-->
     </div>
     
<!--ばななへ　ここで閉じてるよ（りな）-->
</main>   
  
  <!--ばななへ　ここから他の画像を背景にしているよ（りな）-->
  
    <div class="cd-scrolling-bg cd-color-1">
    <!--    <div class="cd-container">-->
    <!--        <p>-->
    <!--            コンテンツ-->
    <!--        </p>-->
    <!--    </div> -->
    <!--</div>-->
    
    
 
    <div class="cd-fixed-bg cd-bg-2">
       
    </div> 
  
    <!--<div class="cd-scrolling-bg cd-color-2">-->
    <!--    <div class="cd-container">-->
    <!--        <p>-->
    <!--            コンテンツ-->
    <!--        </p>-->
    <!--    </div> -->
    <!--</div> -->
    
    
     <div class="cd-fixed-bg cd-bg-3">
       
    </div> 
  
    <!--<div class="cd-scrolling-bg cd-color-3">-->
    <!--    <div class="cd-container">-->
    <!--        <p>-->
    <!--            コンテンツ-->
    <!--        </p>-->
    <!--    </div> -->
    <!--</div> -->
    
    <!-- <div class="cd-fixed-bg cd-bg-4">-->
        
    <!--</div> -->
  
    <!--<div class="cd-scrolling-bg cd-color-4">-->
    <!--    <div class="cd-container">-->
    <!--        <p>-->
    <!--            コンテンツ-->
    <!--        </p>-->
    <!--    </div> -->
    <!--</div> -->
    
    


<!--ばななへ　ここまでだよ（りな）-->




     
        
        <!--<div class="signup button">-->
        <!--     {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn-warning btn btn-lg gradient']) !!}-->
        <!--</div>-->
    @endif
@endsection