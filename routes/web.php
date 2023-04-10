<?php

use App\Http\Controllers\Addcontroller;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// !костыль

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

Route::get('/reg', [RegisteredUserController::class, 'create']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// !главная страница 
Route::get('/', [HomeController::class, 'index'])->name('home');
// !если пользователь не авторезирован то он ен може поппасть
Route::middleware('auth')->group(function () {
    Route::get('/sheets', [Addcontroller::class, 'index'])->name('sheets');
});