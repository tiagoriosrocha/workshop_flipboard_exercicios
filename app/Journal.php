<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Follow;

class Journal extends Model
{
    public function seguidores(){
        return $this->belongsToMany(Follow::class, 'follow', 'user_id', 'journal_id');
    }
}
