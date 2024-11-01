<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('notice.index');
});
Route::get('/notice',[AuthController::class, 'index'])->name('notice');
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/store', [AuthController::class,'store'])->name('store');