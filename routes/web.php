<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\EBookController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\Privacy;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/signup', [AccountController::class, 'signupView']);
Route::post('/signup', [AccountController::class, 'signup']);

Route::get('/login', [AccountController::class, 'loginView']);
Route::post('/login', [AccountController::class, 'login']);

Route::get('/home', [EBookController::class, 'home'])->middleware('privacy');
Route::get('/ebookdetail/{id}',[EBookController::class,'index'])->middleware('privacy');

Route::get('/logout', [HomeController::class, 'logout']);

Route::get('/profile', [AccountController::class, 'profile'])->middleware('privacy');
Route::post('/updateprofile', [AccountController::class, 'updateprofile'])->middleware('privacy');