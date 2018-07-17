<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use App\Http\Requests\Formrequest;

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
        
        //post tag いい感じにジョインしてると思われる
        $vs = User::join('post_tag', 'users.id', '=', 'post_tag.user_id')->get();
    
        $userIdFromPostId = array();
        foreach($vs as $v) {
            $userIdFromPostId["".$v->post_id] = $v->nickname;
        }
        
      //  var_dump($userIdFromPostId);
    //    return;
//        return view('hiima.index', ['posts' => Post::all(), 'users' => User::all(), 'tags' => Tag::all()]);
        return view('hiima.index', [
            'errorMessage' => $_GET['errorMessage']??'',
            'posts' => Post::orderBy('created_at', 'desc')->get(), //ここいじると表示順が変わるよ。ばなな
            'userIdFromPostId' => $userIdFromPostId,
            'users' => User::all(), 'tags' => Tag::all()]);

        //users足したよ。ばなな
        
//        return view('hiima.index');
    }
    
    public function store(Request $request)
        {/*
        $result=Tag::create(
            [\Form::text("tags","{{ $tag->id }}",['class'=>""])]);
        $result=Post::create(
            [\Form::text("body","{{old('name')}}",['class'=>"form-control"])
            ]);*/
        
        $errorMessage = '';
        if(empty($_POST['body']??'') || empty($_POST['tags']??'')) {
            $errorMessage =  '必須項目です。';
        } else {
            $datap = new Post;
         //   $datat = new Tag;
            $datap->body = $request->body;
        //    $datat->name = $request->tag;
            $datap->save();
         // insert into `post_tag` (`post_id`, `tag_id`) values (5, 1
           $datap->tags()->attach($request->tags,['user_id' => \Auth::user()->id]);  
        }

        //バリデーションOK

        //fileは個別に処理このへんいらなそうだから消してるよリサ
        // $file = \Input::file('image');
        // if(!empty($file))
        // {
        //     $filename = $file->getClientOriginalName();
        //     $move = $file->move('./',$filename); //public
        // }
        // else
        // {
        //     //ファイルアップロードが無いときは変数を初期化（viewでのエラー防止）
        //     $inputs["image"] = "none";
        // }


        //
        $data = compact('inputs');
        $data['errorMessage'] = $errorMessage;
        return redirect('/home?errorMessage='.urlencode($errorMessage));
//        return view('hiima.index',$data);
        }
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
