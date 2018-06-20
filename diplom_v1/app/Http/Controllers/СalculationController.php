<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Article;

class СalculationController extends Controller
{

    public function execute() {

        $rights = Auth::user()->rights;
        $name = Auth::user()->name;

        $articles = Article::all();

        $data = [
            'name' => $name,
            'articles' => $articles
        ];

        return view('calculation', $data);
    }

    public function count($page) {

        $article = Article::find($page);

        $number = $article->number;
        $amount = $article->amount;
        $performance1 = $article->performance1;
        $performance2 = $article->performance2;
        $performance3 = $article->performance3;
        $performance4 = $article->performance4;
        $cost_price1 = $article->cost_price1;
        $cost_price2 = $article->cost_price2;
        $cost_price3 = $article->cost_price3;
        $cost_price4 = $article->cost_price4;
        $price = $article->price;


//      echo $number.' '.$amount.' '.$performance1.' '.
//              $performance2.' '.$performance3.' '.$performance4.' '.
//              $cost_price1.' '.$cost_price2.' '.$cost_price3.
//              ' '.$cost_price4.' '.$price;
        
        
    }

}
