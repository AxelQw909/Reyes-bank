<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\HistoryBalances;

Route::get('/', function () {
    return view('profile');
});

Route::get('/addCash', function () {
    return view('addCash');
});

Route::get('/history', function () {
    return view('history');
});


Route::get('/reg', function () {
    return view('reg'); 
});

Route::post('/register', [UserController::class, 'register']);
Route::get('/profile/{id}', [UserController::class, 'showProfile']); 


Route::get('/family', function(){
    return view('family');
});

Route::get('/addfamily', function(){
    return view('addFamily');
});


Route::get('/family', [FamilyController::class, 'showFamily']);
Route::post('/AddFam', [FamilyController::class, 'AddFam']);

Route::get('/profile', [HistoryBalances::class, 'AddHistory']);
Route::post('/addCahs', [HistoryBalances::class, 'AddMoney']);
