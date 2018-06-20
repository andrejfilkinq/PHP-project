<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('api', 'ApiController@index');
Route::get('api/{id}', 'ApiController@show');
Route::post('api', 'ApiController@store');
Route::put('api', 'ApiController@store');
Route::delete('api/{id}', 'ApiController@destroy');


Route::get('articles', 'ArticleControllerApiTest@index');
