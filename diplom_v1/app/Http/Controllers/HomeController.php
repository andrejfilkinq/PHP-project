<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Article;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $rights = Auth::user()->rights;
        $name = Auth::user()->name;
        
        $articles = Article::all();
        
        $data = [
           'name' => $name,
            'articles' => $articles
        ];
        

        if ($rights == 1) {
//            return view('home_admin');
            return view('index', $data);
            
        } else {
            return view('user.home', ['name' => $name]);
        }
    }

}
