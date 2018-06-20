<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Article;

class Articles_Users extends Controller
{

    public function index() {

//        $user = User::find(2);
//
//
//
//        $message = $user->articles;
//
////        foreach ($message->articles) {
////            
////        }
//
//        $article = Article::all();
//        foreach ($article as $flight) {
//            echo $flight->name.'<br/>';
//        }
        $message = Article::all();
        return view('TestMessage')->with('message', $message);
    }

    public function post(Request $request) {

        $article = new Article();

        $article->name = 'User';
        $article->message = $request->message;
        $article->save();

        $message = Article::all();


        return view('TestMessage')->with('message', $message);
    }

}
