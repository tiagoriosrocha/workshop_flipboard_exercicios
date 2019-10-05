<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Journal extends Model
{
    public function seguidores(){
        return $this->belongsToMany(User::class, 'followers', 'journal_id', 'user_id');
    }
}
