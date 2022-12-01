<?php

namespace App\Http\Controllers;
use Auth;
// use Illuminate\Suppport\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Route;
use Psy\Command\WhereamiCommand;

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

        $users = DB::select('select * from users');
        foreach ($users as $user) {
            echo $user->name,"<br>";
        }
        $articles = DB::select('select * from articles');
        foreach ($articles as $article) {
            echo $article->creator;
        }
        $user_id = Auth::user()->id;
        $articles = Article::where('id',$user_id)->get();
        return view('home', ['articles'=>$articles]);

    }

}

