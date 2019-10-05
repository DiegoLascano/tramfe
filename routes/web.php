<?php

// auth()->logout();
Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/', function () {
    return view('layouts.app');
});
Route::resource('comments', 'CommentsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
