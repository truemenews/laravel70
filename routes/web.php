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

Route::prefix('closure')->group(function () {
    Route::get('where-callback', 'ClosureDbController@whereCallback');
});

Route::prefix('config')->group(function () {
    Route::get('get', 'ConfigController@get');
});

