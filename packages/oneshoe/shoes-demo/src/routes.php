<?php

Route::get('schoen', 'Oneshoe\ShoesDemo\ShoeController@index');

//Route::group(['prefix' => 'admin', 'middleware' => ['web', 'auth']], function(){
//    Route::resource('blog', 'Rasrobin\Blog\Controllers\BlogController');
//    Route::resource('media', 'Rasrobin\Blog\Controllers\MediaController');
//});
