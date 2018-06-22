<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Email;
use Auth;

class VerifyEmailController extends Controller {

    public function confirm($token) {
        $user = User::where('token', $token)->first();
        if ($user === null) {
            abort(404);
        }
        $user->emailConfirm();
        Auth::login($user);

        return redirect('/home')->withMessage([
                    'status' => 'Your email hes been confirmation'
        ]);
    }

    public function sendEmail($thisUser) {
        Mail::to($thisUser['email'])->send(new MailTrap($thisUser));
    }

    public function verifyEmail() {
        return view('mail.contact-mail');
    }

}
