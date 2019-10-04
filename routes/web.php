<?php

Route::get('/', function () {
    return view('layouts.app');
});
Route::get('/', function () {
    return view('layouts.app');
});
Route::resource('comments', 'CommentsController');