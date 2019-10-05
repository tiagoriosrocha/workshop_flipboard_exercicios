<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function likes(){
    	return $this->belongsToMany(User::class, 'likes', 'post_id', 'user_id');
    }
}
