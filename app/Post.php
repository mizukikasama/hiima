<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   protected $fillable = ['body'];
    
    public function user()//足したよ。ばなな
    {
        return $this->belongsTo(User::class);
    }
    
    public function tags()//足したよ。みづき
    {
        return $this->belongsToMany(Tag::class);
    }
}
