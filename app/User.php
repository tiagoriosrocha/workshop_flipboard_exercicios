<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Journal;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function seguindo(){
        return $this->belongsToMany(Journal::class, 'followers', 'user_id', 'journal_id');
    }

    public function likes(){
        return $this->belongsToMany(Post::class, 'likes', 'user_id', 'post_id');
    }

    public function visualizados(){
        return $this->belongsToMany(Post::class, 'visualizeds', 'user_id', 'post_id');
    }
}
