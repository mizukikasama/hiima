<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Post;
use App\Tag;
use App\User;
use App\Category;
use App\Http\Requests\Formrequest;
use Illuminate\Support\Facades\DB;

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
                if(false == \Auth::check())
                    {
                        return redirect('/');
                    }
                if (\Auth::check()) 
                    {
                        $user = \Auth::user();
                    }
            
            return view('hiima.index', [
                'tags' => Tag::all(),
                'errorMessage' => $_GET['errorMessage']??'',
                'posts' => Post::orderBy('created_at', 'desc')->get(), //ここいじると表示順が変わるよ。ばなな
                'users' => User::all(), 'tags' => Tag::all(), 'categories'=> Category::all()]);

        //users足したよ。ばなな
        
//        return view('hiima.index');
    }
    
    public function store(Request $request)
        {
        /*
        $result=Tag::create(
            [\Form::text("tags","{{ $tag->id }}",['class'=>""])]);
        $result=Post::create(
            [\Form::text("body","{{old('name')}}",['class'=>"form-control"])
            ]);*/
        $errorMessage = '';
        if(empty($_POST['body']??'') || empty($_POST['tags']??'')) {
            $errorMessage =  '必須項目です。';
        } else {
            // foreach($request->tags as $tag)
                // {
                    $datap = new Post;
                 //   $datat = new Tag;
                    $datap->body = $request->body;
                    $datap->category_id= $request->categories[0];
                //    $datat->name = $request->tag;
                    $datap->user_id = \Auth::user()->id;
                    $datap->save();
                    $datap->tags()->attach($request->tags);
                    // $datap->tags()->attach($request->tags,['user_id' => \Auth::user()->id]);
                // }
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
    
    public function show($id)
        {

                $user = \Auth::user();

                $post = Post::find($id);

                $tags = $post->tags()->get();//[0]->pivot->tag_id;

                $user_id = $post->user()->get();
    
               // if($post->tags()->get()[0]->pivot->user_id == $user->id) {
    
                    return view('hiima.show', [
                        'post' => $post,
                        'tags' => $tags,
                        'user_id' => $user_id
                    ]);
              //  } else {
              //      return redirect('/home');
              //  }
        }
    
    //追加りな（削除ボタン）
    public function destroy($id) 
        {
        $post = Post::find($id); //Postモデルに変更（Hiimaモデルなんてない）

        // if (\Auth::id() === $post->user_id) {
        //     $post->delete();
        // }いらないuserでチェックする必要なし。
        // postのidがかぶることはないから

         // postsテーブルのidとpost_tagテーブルのpost_idが、$idに一致したものを消したい。
        //  $idとは、web.phpで/home/{id}で引数を設定したもの
        // index.blade参照
        DB::table('posts')->where('id', '=', $id)->delete();
        DB::table('post_tag')->where('post_id', '=',$id)->delete(); 
       
        
        return redirect("/home");
    }
 
    
    //なんだろうこれ
    
    //     private $CHOICE_WEIGHT = ["選択肢１" => "1",
    //         "選択肢２" => "2",
    //         "選択肢３" => "4"];
 
    // public function getChoiceAttribute($value){
    //     //合計値であるDBの値を要素に分解してモデルで利用する
    //     $c = [];
    //     foreach($this->CHOICE_WEIGHT as $key => $cn){
    //         if(($this->CHOICE_WEIGHT[$key] & $value) > 0){
    //             $c[] = $this->CHOICE_WEIGHT[$key];
    //         }
    //     }
    //     return $c;     
    // }
    // public function setChoiceAttribute($value){
    //     //DB格納時は要素の合計値をDBに設定する
    //     $all = 0;
    //     foreach($value as $c){
    //         $all += $c;
    //     }
    //     $this->attributes["choice"]=$all;
    // }

    
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

