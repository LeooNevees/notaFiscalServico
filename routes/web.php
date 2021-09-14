<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'home', 'uses' => function(){
    return view('home');

}]);
Route::get('/login/{msg?}', ['as' => 'login.index', 'uses' => 'App\Http\Controllers\LoginController@index']);

Route::get('/login/logout', ['as' => 'login.logout', 'uses' => 'App\Http\Controllers\LoginController@logout']);

Route::get('/notice', ['as' => 'notice.index', 'uses' => 'App\Http\Controllers\NoticeController@index']);

Route::post('/login/entry', ['as' => 'login.entry', 'uses' => 'App\Http\Controllers\LoginController@entry']);
