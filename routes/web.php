<?php

use App\Http\Controllers\ApiKeysController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectKeyController;
use App\Http\Controllers\ProjectKeywordController;
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

Auth::routes(['verify' => true]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth', 'verified:verification.notice']], function () {
    Route::resource('/profile', ProfileController::class);
    Route::resource('/api-keys', ApiKeysController::class);
    Route::resource('/projects', ProjectController::class);
    Route::resource('/project-keywords', ProjectKeywordController::class);
});
