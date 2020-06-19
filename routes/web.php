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

Route::get('/login', function () {
    return view('pages.p1');
});


Auth::routes();


Route::group(['middleware'=> ['auth']], function() {
    Route::group(['prefix'=>'admin'],function(){
        Route::get('/', 'HomeController@index')->name('admin');
        Route::get('/dashboard', 'UserController@user')->name('user-home');
        Route::get('/p1', 'UserController@p1')->name('p1');
        Route::get('/p2', 'UserController@p2')->name('p2');
        Route::get('/p3', 'UserController@p3')->name('p3');
        Route::get('/p4', 'UserController@p4')->name('p4');
        Route::get('/p5', 'UserController@p5')->name('p5');
        Route::get('/p6', 'UserController@p6')->name('p6');
    });
});

Route::get('/', 'HomeController@index')->name('user-home');
Route::get('/dashboard', 'UserController@user')->name('user-home');
