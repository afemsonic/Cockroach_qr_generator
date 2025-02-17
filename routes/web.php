<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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


Route::get('/', [LoginController::class, 'index']);
Route::post('/login/proceed', [LoginController::class, 'login'])->name('login-proceed');

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register/proceed', [RegisterController::class, 'create'])->name('register-proceed');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');