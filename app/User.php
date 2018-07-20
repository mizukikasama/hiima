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

static function image_map($user_id) {
    $array = [
        '1' => 'image/logo1.jpg',
        '2' => 'image/logo2.jpg', 
        '3' => 'image/logo3.jpg',
        '4' => 'image/logo4.jpg',
        '5' => 'image/logo5.jpg', 
        '6' => 'image/logo1.jpg',
        '7' => 'image/logo2.jpg',
        '8' => 'image/logo3.jpg', 
        '9' => 'image/logo4jpg',
        '10' => 'image/logo5.jpg',
        '11' => 'image/logo1.jpg', 
        '12' => 'image/logo2.jpg',
        '13' => 'image/logo3.jpg',
        '14' => 'image/logo4.jpg', 
        '15' => 'image/logo5.jpg',
        '16' => 'image/logo1.jpg',
        '17' => 'image/logo2.jpg', 
        '18' => 'image/logo3.jpg',
        '19' => 'image/logo4.jpg',
        '20' => 'image/logo5.jpg', 
        '21' => 'image/logo1.jpg',
        '22' => 'image/logo2.jpg',
        '23' => 'image/logo3.jpg', 
        '24' => 'image/logo4.jpg',
        '25' => 'image/logo5.jpg',
        '26' => 'image/logo1.jpg', 
        '27' => 'image/logo2.jpg',
        '28' => 'image/logo3.jpg',
        '29' => 'image/logo4.jpg', 
        '30' => 'image/logo5.jpg',
        '31' => 'image/logo1.jpg',
        '32' => 'image/logo2.jpg', 
        '33' => 'image/logo3.jpg',
        '34' => 'image/logo4.jpg',
        '35' => 'image/logo5.jpg', 
        '36' => 'image/logo1.jpg',
        '37' => 'image/logo2.jpg',
        '38' => 'image/logo3.jpg', 
        '39' => 'image/logo4.jpg',
        '40' => 'image/logo5.jpg',
        '41' => 'image/logo1.jpg', 
        '42' => 'image/logo2.jpg',
        '43' => 'image/logo3.jpg',
        '44' => 'image/logo4.jpg', 
        '45' => 'image/logo5.jpg',
        '46' => 'image/logo1.jpg',
        '47' => 'image/logo2.jpg', 
        '48' => 'image/logo3.jpg',
        '49' => 'image/logo4.jpg',
        '50' => 'image/logo5.jpg', 
      
        
        // ここを複製しまくる明日
    ];
    // var_dump(11111111);
    // exit;
    return $array[$user_id];
}
}
