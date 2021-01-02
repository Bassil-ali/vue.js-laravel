<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('invoice', function(){
    return view('invoice');
});

Route::get('{path}','HomeController@index')->where( 'path', '([-a-z0-9_\s]+)' );
