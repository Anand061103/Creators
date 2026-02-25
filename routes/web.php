<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

use App\Http\Controllers\User\WelcomeController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\WalletController;



Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.store');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('/register', RegisterController::class) ->only(['create', 'store']); 

     

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard.index');
  
});


Route::prefix('user')->name('user.')->group(function () {

 Route::get('/dashboard', function () { return view('user.dashboard.index'); })->name('dashboard');
 Route::resource('wallet', WalletController::class);

       

   
});












