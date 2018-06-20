<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleControllerApiTest extends Controller
{

    public function index(Request $request) {
        $z = [];
        for ($i = 5; $i < 10; $i++) {
            $z[$i] = $i;
        }
        return response()->json($z);
    }

}
