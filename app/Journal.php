<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Follow;

class Journal extends Model
{
    public function seguidores(){
        return $this->belongsToMany(Follow::class, 'follow', 'journal_id', 'user_id');
    }
}
