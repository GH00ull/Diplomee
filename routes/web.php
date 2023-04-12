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


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// !Регистрация
Route::get('/reg', [RegisteredUserController::class, 'create']);
// !главная страница 
Route::view('/', 'ohas')->name('home');
// !вывод товаров
Route::get('/show', [Addcontroller::class, 'show'])->name('show');
// !если пользователь не авторезирован то он ен може поппасть
Route::middleware('auth')->group(function () {
    Route::get('/sheets', [Addcontroller::class, 'index'])->name('sheets');
    Route::post('/sheetss', [Addcontroller::class, 'create'])->name('creates');
    Route::view('/create', 'sheets')->name('create');
});