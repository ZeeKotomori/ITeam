<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function(){
    Route::get('/signUp','signUp')->name('signUp');
    Route::get('/logIn','logIn')->name('logIn');
    Route::post('/createData','createData')->name('createData');
    Route::post('/userData','userData')->name('userData');
    Route::get('/logOut','logOut')->name('logOut');
});
Route::group(['prefix' => 'user','middleware' => ['auth'], 'as', 'user'], function(){
    Route::get('/index',[UserController::class,'index'])->name('user.index');
});
