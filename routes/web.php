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

Route::get('/', function () {
    return view('welcome');
});


Route::get('login', 'Auth\LoginController@login');
Route::post('login', 'Auth\LoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('message/index', 'MessageController@index');
Route::get('message/send', 'MessageController@send');
Route::get('call-static/test', 'CallStaticController@testStatic');


Route::get('call-static/test', 'CallStaticController@testStatic');

Route::group(['prefix'=>'auto-bind-params'], function(){
    Route::get('/user/get-name', 'UserParamsController@getName');
    Route::get('/server/get-params', 'UserParamsController@getServer');
    Route::get('/user/post-form', 'UserParamsController@postForm');
    Route::post('/user/submit', ['as' => 'user.submit', 'uses'=>'UserParamsController@submitForm']);
    Route::post('/user/post-with-header', [
        'as' => 'user.postWithHeader', 'uses'=>'UserParamsController@postWithHeader']);
});