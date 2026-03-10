<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('profile');
});

Route::get('/addCash', function () {
    return view('addCash');
});

Route::get('/history', function () {
    return view('history');
});
