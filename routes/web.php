<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});
Route::view('/welcom','welcome');

Route::get('/about/{name}', function($name){
   
    return view('about',['name'=>$name]);
});



Route::redirect('/about/{name}','/welcom');

Route::get('user', [UserController::class, 'getUser']);
Route::get('userData/{name}', [UserController::class, 'UserData']);
Route::get('login', [UserController::class, 'adminLogin']);
