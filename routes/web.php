<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
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

Route::get('/profile', function () {
    return view('profile.index');
})->name('profile');

Route::get('/profile/edit', function () {
    return view('profile.edit');
})->name('profile.edit');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/bookmark', function () {
    return view('bookmark');
})->name('bookmark');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/books/details', [BookController::class, 'show'])->name('books.show');

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

    Route::get('/login', [LoginController::class, 'index'])->name('login.show');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.perform');

    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
});

Route::prefix('admin')
    ->middleware(['auth'])
    ->name('admin.')
    ->group(function () {

        Route::prefix('books')
            ->name('books.')
            ->group(function () {
                Route::get('/', [BookController::class, 'index'])->name('index');
                Route::get('/create', [BookController::class, 'create'])->name('create');
                Route::post('/', [BookController::class, 'store'])->name('store');
                Route::get('/details/{slug}', [BookController::class, 'show'])->name('show');
                Route::get('/{slug}/edit', [BookController::class, 'edit'])->name('edit');
                Route::put('/{slug}', [BookController::class, 'update'])->name('update');
                Route::delete('/{slug}', [BookController::class, 'destroy'])->name('destroy');
            });
    });
