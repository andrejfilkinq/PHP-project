<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
//use Laravel\Socialite\Facades\Socialite;
use Socialite;
use Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class GoogleAuthController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider) {
        return Socialite::driver($provider)->redirect();
    }

    //---------------------------------------------
    public function handleProviderCallback($provider) {
        $user = Socialite::driver($provider)->stateless()->user();
        $users = DB::table('users')->where('email', '=', $user->email)->get();
        if (isset($users[0])) {
//            Auth::login($user);
//            Auth::loginUsingId(2);
//            redirect('home');
//            $users123 = DB::table('users')->where('email', '=', $user->email)->get();
//            dd($users123->id);

            $users123 = User::all()->where('email', $user->email);
            $idEmail = 0;
            foreach ($users123 as $value) {
                $idEmail = $value->id;
            }

            Auth::loginUsingId($idEmail);
            return redirect($this->redirectTo);
            return $user->token;
        } else {
            $authUser = $this->FindOrCreateUser($user, $provider);
            Auth::login($authUser, true);
            return redirect($this->redirectTo);
            return $user->token;
        }

//        $authUser = $this->FindOrCreateUser($user, $provider);
//        Auth::login($authUser, true);
//        return redirect($this->redirectTo);
//        return $user->token;
    }

    public function FindOrCreateUser($user, $provider) {




//
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider' => strtoupper($provider),
                    'provider_id' => $user->id,
        ]);
    }

}
