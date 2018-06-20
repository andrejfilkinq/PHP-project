<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;

class User extends Authenticatable
{

    use Notifiable;

    const EMAIL_CONFIRMED = 1;
    const EMAIL_NOT_CONFIRMED = 0;
    const TOKEN_EXPIRED = null;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'login', 'token', 'images',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_tosken',
    ];

    public function articles() {
        return $this->hasMany('App\Article');
    }

    public static function registerAndLogin($user) {

//        $images = new RegisterController();
//
//        $images->name_foto;
//


        $user = self::create([
                    'name' => $user['name'],
                    'images' => $user['images'],
                    'login' => $user['login'],
                    'email' => $user['email'],
                    'password' => bcrypt($user['password']),
                    'token' => str_random(30),
//                    'images' => 'test',
        ]);
//        Auth::login($user);
        return $user;
    }

    public function emailConfirm() {
        $this->token = self::TOKEN_EXPIRED;
        $this->status = self::EMAIL_CONFIRMED;
        return $this->save();
    }

    public function ifEmailConfirmed() {
        return (bool) $this->status;
    }

}
