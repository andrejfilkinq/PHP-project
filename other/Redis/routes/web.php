<?php

use App\Jobs\SendEmailJob;
use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('queue', 'QueueController@index');

//Route::get('sendEmail', function() {
//
//    $job = (new SendEmailJob())->delay(Carbon::now()->addSecond(10));
//
//
//    dispatch($job);
////    dispatch(new SendEmailJob);
//
//    return 'Email is Send';
//});


Route::get('sendEmail', 'MailRunController@send');