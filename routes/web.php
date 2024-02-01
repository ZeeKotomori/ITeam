<?php

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
    return view('/signUp');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/signup','signUp')->name('signUp');
    Route::get('/logIn','logIn')->name('logIn');
    // Route::get('/admin/index/{users:roles}','index')->name('index');
    Route::get('/admin/product/{users:roles}','product')->name('admin.product');
});
