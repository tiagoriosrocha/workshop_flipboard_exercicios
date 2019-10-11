<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Journal;

class Post extends Model
{
    public function likes(){
    	return $this->belongsToMany(User::class, 'likes', 'post_id', 'user_id');
    }

    public function visualizou(){
    	return $this->belongsToMany(User::class, 'visualizeds', 'post_id', 'user_id');
    }

    public function revista(){
    	return $this->belongsTo(Journal::class,'journal_id');
    }
}
