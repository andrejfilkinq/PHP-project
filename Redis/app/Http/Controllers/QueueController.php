<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class QueueController extends Controller
{
    public function index() {
        Redis::set('user.profile:1', 'Juan');
        Redis::set('user.profile:2', 'Carlos');
//        Redis::FLUSHALL();
    }
}
