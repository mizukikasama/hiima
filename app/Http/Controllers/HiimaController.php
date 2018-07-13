<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;

class HiimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       public function index()
    {
        $data = [];
        
        if (\Auth::check()) {
            $user = \Auth::user();
        }
            // $microposts = $user->feed_microposts()->orderBy('created_at', 'desc')->paginate(10);

        //     $data = [
        //         'user' => $user,
        //         'microposts' => $microposts,
        //     ];
        // }
        
        
        $vs = User::join('post_tag', 'users.id', '=', 'post_tag.user_id')->get();
    
        $userIdFromPostId = array();
        foreach($vs as $v) {
            $userIdFromPostId["".$v->post_id] = $v->nickname;
        }
      //  var_dump($userIdFromPostId);
    //    return;
//        return view('hiima.index', ['posts' => Post::all(), 'users' => User::all(), 'tags' => Tag::all()]);
        return view('hiima.index', [
            'posts' => Post::orderBy('created_at', 'desc')->get(), //ここいじると表示順が変わるよ。ばなな
            'userIdFromPostId' => $userIdFromPostId,
            'users' => User::all(), 'tags' => Tag::all()]);

        //users足したよ。ばなな
        
//        return view('hiima.index');
    }

    //   public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'content' => 'required|max:191',
    //     ]);

    //     $request->user()->microposts()->create([
    //         'content' => $request->content,
    //     ]);

    //     return redirect()->back();
    // }
    //     public function destroy($id)
    // {
    //     $micropost = \App\Micropost::find($id);

    //     if (\Auth::user()->id === $micropost->user_id) {
    //         $micropost->delete();
    //     }

    //     return redirect()->back();
    // }
}