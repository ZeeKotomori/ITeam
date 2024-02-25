<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::group(['prefix' => 'admin','middleware' => ['auth'], 'as', 'admin'], function(){
    Route::get('/edit/{produk:id}',[AdminController::class,'edit'])->name('admin.edit');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/listProduct',[AdminController::class,'listProduct'])->name('admin.listProduct');
    Route::get('/delete/{user:id}',[AdminController::class,'delete'])->name('admin.delete');
    Route::get('/addProduct',[AdminController::class,'addProduct'])->name('admin.addProduct');
    Route::post('/upImg',[AdminController::class,'upImg'])->name('admin.upImg');
});
