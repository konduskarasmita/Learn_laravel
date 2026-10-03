<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('home');
});
Route::view('/welcom','welcome')->middleware('check1');

Route::get('/about/{name}', function($name){
   
    return view('about',['name'=>$name]);
});
Route::view('/user-form','user-form');



Route::redirect('/about/{name}','/welcom');

Route::get('user', [UserController::class, 'getUser']);
Route::get('userData/{name}', [UserController::class, 'UserData']);
Route::get('login', [UserController::class, 'adminLogin']);
Route::post('adduser', [UserController::class, 'addUser']);

Route::middleware('check1')->group(function(){
    // Route::view('/user-form','user-form');
});

// another way to apply middleware 
Route::view('home','home')->middleware([AgeCheck::class, CountryCheck::class]); //with multiple middleware
Route::view('home','home')->middleware(AgeCheck::class); //with single middleware

Route::get('users', [UserController::class, 'UserList']);

Route::get('/students',[StudentController::class, 'getData']);

Route::get('/getData',[ApiController::class,'getData']);

Route::get('/queries', [UserController::class, 'queries']);

// Route::view('upload');
Route::get('/upload', [UploadController::class, 'upload']);
Route::post('/uploadFile', [UploadController::class, 'uploadFile']);

Route::view('/about','about');
