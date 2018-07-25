<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // add

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(10); //書き換えたよリナ
        
        return view('users.index', [
            'users' => $users,
        ]);
    }
    
    
  
    
    public function show($id) 
    {   
        $user = User::find($id);
        
        // $posts = $user->posts()->orderBy('created_at', 'desc')->paginate(10); //いくつ表示させるかを変更（りな）
        $data = [
            'user' => $user,
            'histories' => $user->posts()
        //     'posts' => $posts, //microposts→postsに変更そしてコメントアウト（りな）
        ];

         $data += $this->counts($user);
        
        return view('users.show', $data);
        
    }
    
    
    
    
    
    
    
    // 以下追加（りな）
    
    public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followings,
        ];

        $data += $this->counts($user);
       // var_dump($data);
        return view('users.followings', $data);
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followers,
        ];

        $data += $this->counts($user);

        return view('users.followers', $data);
    }
    
    public function sankas($id)
    {
        $user = User::find($id);
        $sanakas = $user->post_tags()->paginate(10);
       

       $data = [
            'user' => $user,
            'sankas' =>  $sanakas,
        ];
        $data += $this->counts($user);

        return view('users.sankas', $data);
    }
    
    // public function show($id) //追加りな
    // {
    //     $user = User::find($id);

    //     return view('users.show', [
    //         'user' => $user,
    //     ]);
    // }
}
