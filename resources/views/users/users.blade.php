<!--全替えリナ-->
  <link rel="stylesheet" href="{{ secure_asset('css/users.css') }}">
@if (count($users) > 0)
<br>
<br>
<ul class="media-list">
@foreach ($users as $user)
    <li class="media">
        <div class="media-left">
        
         <img class="media-left media-object img-rounded" src="{{ asset(App\User::image_map($user->id))}}" alt="" >
              
        </div>
        <div class="media-body">
            <div>
                {{ $user->nickname }}
            </div>
            <div>
                <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>
            </div>
        </div>
    </li>
    
    <!--書き換えたよりな-->
@endforeach 
</ul>
{!! $users->render() !!}
@endif


    