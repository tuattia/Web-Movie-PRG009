<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/start', function () {
    return view('login.start');
})->middleware('guest')->name('login');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'autenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/test', function () {
    return view('test');
})->middleware('auth');

Route::get('/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
// Route::get('http://127.0.0.1:8000/google/callback', [GoogleAuthController::class, 'callbackGoogle']);
Route::get('/auth', [GoogleAuthController::class, 'callbackGoogle']);
