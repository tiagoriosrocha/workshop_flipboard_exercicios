<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;

class Journal extends Model
{
    public function seguidores(){
        return $this->belongsToMany(User::class, 'followers', 'journal_id', 'user_id');
    }

    public function posts(){
    	return $this->hasMany(Post::class);	
    }
}
