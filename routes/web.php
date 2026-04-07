<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('profile');
});

Route::get('/addCash', function () {
    return view('addCash');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/reg', function () {
    return view('reg'); 
});

Route::post('/register', [UserController::class, 'register']);
Route::get('/profile/{id}', [UserController::class, 'showProfile']); 


Route::get('/family', function(){
    return view('family');
});

Route::get('/addFamily', function(){
    return view('addFamily');
});