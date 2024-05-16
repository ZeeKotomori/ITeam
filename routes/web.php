<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserOTP;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

// Route::get('/mail/mailOtp', function () {
//     return view('mail.mailOtp');
// });

Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('/',[UserController::class,'index'])->name('user.index');

Route::controller(AuthController::class)->group(function(){
    Route::get('/signUp','signUp')->name('signUp');
    Route::get('/tryGuest','tryGuest')->name('tryGuest');
    Route::get('/{user_id}/otp-verification',
        function ($user_id) {
            $user = User::find($user_id);
            return view('otpVerification', compact('user'));
        })->name('otp-verification');

    Route::post('/{user_id}/otp-validation',
        function ($user_id, Request $request) {
            $otp = UserOTP::where('otp_code', $request->input('otp_code'))
                ->where('user_id', $user_id)
                ->where('expired_at', '>', now())
                ->first();
            if (!$otp) {
                return redirect()->back()->withErrors([
                    'otp_code' => 'OTP CODE tidak ditemukan.'
                ]);
            }
            $otp->user->email_verified_at = Carbon::now();
            $otp->user->save();
            Auth::login($otp->user);
            UserOTP::where('user_id', $user_id)->delete();
            return redirect(RouteServiceProvider::HOME);
        })->name('otp.validation');

    Route::get('/logIn','logIn')->name('logIn');
    Route::post('/createData','createData')->name('createData');
    Route::post('/userData','userData')->name('userData');
    Route::get('/logOut','logOut')->name('logOut');
});

Route::group(['prefix' => 'user','middleware' => ['auth', 'isUserAndAdmin'], 'as', 'user'], function(){
    Route::post('/index/{produk:id}',[UserController::class,'comment'])->name('user.comment');
    Route::post('/index/likes/{produk:id}',[UserController::class,'like'])->name('user.like');
});

Route::group(['prefix' => 'admin','middleware' => ['auth', 'isAdmin'], 'as', 'admin'], function(){
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/listProduct',[AdminController::class,'listProduct'])->name('admin.listProduct');
    Route::get('/delete/{user:id}',[AdminController::class,'delete'])->name('admin.delete');
    Route::get('/deleteProduct/{produk:id}',[AdminController::class,'deleteProduct'])->name('admin.deleteProduct');
    Route::get('/addProduct',[AdminController::class,'addProduct'])->name('admin.addProduct');
    Route::post('/upImg',[AdminController::class,'upImg'])->name('admin.upImg');
    Route::post('/update/{produk:id}',[AdminController::class,'updateProduct'])->name('admin.updateProduct');
    Route::get('/edit/{produk:id}',[AdminController::class,'editProduct'])->name('admin.editProduct');
    Route::get('/dashboard/{user:id}',[AdminController::class,'makeAdmin'])->name('admin.makeAdmin');
});
