<?php

use App\Http\Controllers\ApiKeysController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/email/verify', function () {
        return view('auth.verify');
    })->name('verification.notice');

    Route::post('/email/resend', function(Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->withSuccess('Verification link resent!');
    })->name('verification.resend');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/');
    })->middleware(['signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->withSuccess('Verification link sent!');
    })->middleware(['throttle:6,1'])->name('verification.send');
});

Route::group(['middleware' => ['auth', 'verified:verification.notice']], function () {
    Route::resource('/profile', ProfileController::class);
    Route::resource('/api-keys', ApiKeysController::class);
    Route::resource('/projects', ProjectController::class);
});
