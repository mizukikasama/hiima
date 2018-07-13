<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    public function users()//足したよ。ばなな
    {
        return $this->belongsToMany(User::class);
    }
    
    public function tags()//足したよ。みづき
    {
        return $this->belongsToMany(Tag::class);
        
    }
    

}
