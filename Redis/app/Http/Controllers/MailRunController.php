<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Carbon\Carbon;

class MailRunController extends Controller
{

    public function send() {

        $job = (new SendEmailJob())->delay(Carbon::now()->addSecond(1));
        dispatch($job);
//        dispatch(new SendEmailJob);
        return 'Email is Send';
    }

}
