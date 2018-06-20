<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller {

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

        if ($rights == 1) {
            return view('home_admin');
        } else {
            return view('user.home',['name' => $name]);
        }
    }

}
