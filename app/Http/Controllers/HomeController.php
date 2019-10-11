<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        //Pegando todos os posts que não foram lidos ainda
        $posts = DB::table('posts')
                    ->whereNotIn('id',function ($query) {
                            $query->select('post_id')
                                  ->from('visualizeds')
                                  ->where('user_id',101);
                    })
                    ->orderBy('id')
                    ->get();

        return view('timeline.show',compact('posts','user'));
    }
}
