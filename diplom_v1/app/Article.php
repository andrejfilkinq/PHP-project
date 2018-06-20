<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
//    protected $fillabe = ['user_id','number', 'amount','performance1','performance2','performance3','performance4','cost_price1','cost_price2','cost_price3','cost_price4','price'];


    public function user() {
        return $this->belongsTo('App\User');
    }
}
