<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

     
    protected $fillable = [
        'nickname', 'hiima_id', 'password', //email消したよ（りな）hiima_id追加したよ（りさ）
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function posts(){
        return $this->hasMany(Post::class);
    }
    //追加しちょ　あき
    public function followings()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'user_id', 'follow_id')->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'user_follow', 'follow_id', 'user_id')->withTimestamps();
    }
    
    //追加しちょ　あき
    public function follow($userId)
{
    // confirm if already following
    $exist = $this->is_following($userId);
    // confirming that it is not you
    $its_me = $this->id == $userId;

    if ($exist || $its_me) {
        // do nothing if already following
        return false;
    } else {
        // follow if not following
        $this->followings()->attach($userId);
        return true;
    }
}

public function unfollow($userId)
{
    // confirming if already following
    $exist = $this->is_following($userId);
    // confirming that it is not you
    $its_me = $this->id == $userId;


    if ($exist && !$its_me) {
        // stop following if following
        $this->followings()->detach($userId);
        return true;
    } else {
        // do nothing if not following
        return false;
    }
}


public function is_following($userId) {
    return $this->followings()->where('follow_id', $userId)->exists();
}

// // 以下ばななへ透過したhiimaくんに変更してます！りな
// imageファイルのlogo.yellow.pngとかが透過したhiimaくんだよ（りな）

static function image_map($user_id) {
    $array = [
        '1' => 'image/logo.yellow.png',
        '2' => 'image/logo.blue.png', 
        '3' => 'image/logo.pink.png',
        '4' => 'image/logo.green.png',
        '5' => 'image/logo.purple.png', 
        '6' => 'image/logo.yellow.png',
        '7' => 'image/logo.blue.png', 
        '8' => 'image/logo.pink.png',
        '9' => 'image/logo.green.png',
        '10' => 'image/logo.purple.png', 
        '11' => 'image/logo.yellow.png',
        '12' => 'image/logo.blue.png', 
        '13' => 'image/logo.pink.png',
        '14' => 'image/logo.green.png',
        '15' => 'image/logo.purple.png', 
        '16' => 'image/logo.yellow.png',
        '17' => 'image/logo.blue.png', 
        '18' => 'image/logo.pink.png',
        '19' => 'image/logo.green.png',
        '20' => 'image/logo.purple.png', 
        '21' => 'image/logo.yellow.png',
        '22' => 'image/logo.blue.png', 
        '23' => 'image/logo.pink.png',
        '24' => 'image/logo.green.png',
        '25' => 'image/logo.purple.png', 
        '26' => 'image/logo.yellow.png',
        '27' => 'image/logo.blue.png', 
        '28' => 'image/logo.pink.png',
        '29' => 'image/logo.green.png',
        '30' => 'image/logo.purple.png', 
        '31' => 'image/logo.yellow.png',
        '32' => 'image/logo.blue.png', 
        '33' => 'image/logo.pink.png',
        '34' => 'image/logo.green.png',
        '35' => 'image/logo.purple.png', 
        '36' => 'image/logo.yellow.png',
        '37' => 'image/logo.blue.png', 
        '38' => 'image/logo.pink.png',
        '39' => 'image/logo.green.png',
        '40' => 'image/logo.purple.png', 
        '41' => 'image/logo.yellow.png',
        '42' => 'image/logo.blue.png', 
        '43' => 'image/logo.pink.png',
        '44' => 'image/logo.green.png',
        '45' => 'image/logo.purple.png', 
        '46' => 'image/logo.yellow.png',
        '47' => 'image/logo.blue.png', 
        '48' => 'image/logo.pink.png',
        '49' => 'image/logo.green.png',
        '50' => 'image/logo.purple.png', 
        '51' => 'image/logo.yellow.png',
        '52' => 'image/logo.blue.png', 
        '53' => 'image/logo.pink.png',
        '54' => 'image/logo.green.png',
        '55' => 'image/logo.purple.png', 
        '56' => 'image/logo.yellow.png',
        '57' => 'image/logo.blue.png', 
        '58' => 'image/logo.pink.png',
        '59' => 'image/logo.green.png',
        '60' => 'image/logo.purple.png', 
        '61' => 'image/logo.yellow.png',
        '62' => 'image/logo.blue.png', 
        '63' => 'image/logo.pink.png',
        '64' => 'image/logo.green.png',
        '65' => 'image/logo.purple.png', 
        '66' => 'image/logo.yellow.png',
        '67' => 'image/logo.blue.png', 
        '68' => 'image/logo.pink.png',
        '69' => 'image/logo.green.png',
        '70' => 'image/logo.purple.png', 
        '71' => 'image/logo.yellow.png',
        '72' => 'image/logo.blue.png', 
        '73' => 'image/logo.pink.png',
        '74' => 'image/logo.green.png',
        '75' => 'image/logo.purple.png', 
        '76' => 'image/logo.yellow.png',
        '77' => 'image/logo.blue.png', 
        '78' => 'image/logo.pink.png',
        '79' => 'image/logo.green.png',
        '80' => 'image/logo.purple.png', 
        '81' => 'image/logo.yellow.png',
        '82' => 'image/logo.blue.png', 
        '83' => 'image/logo.pink.png',
        '84' => 'image/logo.green.png',
        '85' => 'image/logo.purple.png', 
        '86' => 'image/logo.yellow.png',
        '87' => 'image/logo.blue.png', 
        '88' => 'image/logo.pink.png',
        '89' => 'image/logo.green.png',
        '90' => 'image/logo.purple.png', 
        '91' => 'image/logo.yellow.png',
        '92' => 'image/logo.blue.png', 
        '93' => 'image/logo.pink.png',
        '94' => 'image/logo.green.png',
        '95' => 'image/logo.purple.png', 
        '96' => 'image/logo.yellow.png',
        '97' => 'image/logo.blue.png', 
        '98' => 'image/logo.pink.png',
        '99' => 'image/logo.green.png',
        '100' => 'image/logo.purple.png', 
      
       
      
        
        // ここを複製しまくる明日
    ];
    // var_dump(11111111);
    // exit;
    return $array[$user_id];
}

// public function feed_histories()
    // {
//$follow_user_ids = $this->followings()-> pluck('users.id')->toArray();
  //      $follow_user_ids[] = $this->id;
        //return Post::whereIn('user_id', $follow_user_ids);//
       
        // $results = \DB::select('select * from post_user where user_id = :id', ['id' => $this->id]);
/*        foreach($results as $result) {
            User::find($result->user_id);
            Post::find($result->post_id);
            Tag::find($result->tag_id);
            }
        }*/
        // return $results;
    // }
}
