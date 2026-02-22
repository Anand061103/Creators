<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\User\WelcomeController;
use App\Http\Controllers\User\DashboardController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('/register', RegisterController::class) ->only(['create', 'store']); 

     

Route::get('/welcome', [WelcomeController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard.index');
  
});













