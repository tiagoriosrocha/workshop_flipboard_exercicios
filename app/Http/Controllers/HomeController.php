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
        //pegando os dados do usuário logado
        $user = Auth::user();
        $user_id = $user->id;

        //Pegando todos os posts que não foram lidos ainda
        $postsNaoLidos = DB::table('posts')
                    ->whereNotIn('id',function ($query) use ($user_id){
                            $query->select('post_id')
                                  ->from('visualizeds')
                                  ->where('user_id', $user_id );
                    })
                    ->orderBy('id')
                    ->get();

        //Pegando todos os posts lidos
        $postsLidos = DB::table('posts')
                    ->whereIn('id',function ($query) use ($user_id){
                            $query->select('post_id')
                                  ->from('visualizeds')
                                  ->where('user_id', $user_id );
                    })
                    ->orderBy('id')
                    ->get();

        return view('timeline.show',['postsnaolidos' => $postsNaoLidos, 'postslidos' => $postsLidos, 'user' => $user]);
    }
}
