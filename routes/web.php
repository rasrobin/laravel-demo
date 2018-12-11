<?php

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

Route::get('shoe', 'ShoeController@index');

//Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function(){
//    Route::resource('blog', 'Rasrobin\Blog\Controllers\BlogController');
//    Route::resource('media', 'Rasrobin\Blog\Controllers\MediaController');
//});
