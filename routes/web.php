<?php

use App\Http\Controllers\Book\BookReviewController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
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
    return redirect(route('login.show'));
});

Route::get('/profile', function () {
    return view('profile.index');
})->name('profile');

Route::get('/profile/edit', function () {
    return view('profile.edit');
})->name('profile.edit');

Route::get('/settings', function () {
    return view('settings');
})->name('settings');

Route::get('/books/details', [BookController::class, 'show'])->name('books.show');

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register.show');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

    Route::get('/login', [LoginController::class, 'index'])->name('login.show');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.perform');
});

Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    // admin route
    Route::prefix('admin')
        ->middleware(['role:admin'])
        ->name('admin.')
        ->group(function () {

            Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

            Route::prefix('books')
                ->name('books.')
                ->group(function () {
                    Route::get('/', [BookController::class, 'index'])->name('index');
                    Route::get('/create', [BookController::class, 'create'])->name('create');
                    Route::post('/', [BookController::class, 'store'])->name('store');
                    Route::get('/{slug}/edit', [BookController::class, 'edit'])->name('edit');
                    Route::put('/{slug}', [BookController::class, 'update'])->name('update');
                    Route::delete('/{slug}', [BookController::class, 'destroy'])->name('destroy');
                });

            Route::prefix('categories')
                ->name('category.')
                ->group(function () {
                    Route::get('/', [CategoryController::class, 'index'])->name('index');
                    Route::get('/create', [CategoryController::class, 'create'])->name('create');
                    Route::post('/', [CategoryController::class, 'store'])->name('store');
                    Route::get('/{slug}/edit', [CategoryController::class, 'edit'])->name('edit');
                    Route::put('/{slug}', [CategoryController::class, 'update'])->name('update');
                    Route::delete('/{slug}', [CategoryController::class, 'destroy'])->name('destroy');
                });
        });

    // peminjam route
    Route::prefix('loan')
        ->middleware(['role:peminjam'])
        ->name('loan.')
        ->group(function () {
            Route::post('/loan', [LoanController::class, 'makeLoan'])->name('perform');
        });

    Route::prefix('collections')
        ->name('collections.')
        ->group(function () {
            Route::get('/', [CollectionController::class, 'index'])->name('show');
            Route::post('/', [CollectionController::class, 'saveBookToCollection'])->name('save');
            Route::delete('/', [CollectionController::class, 'removeBookFromCollection'])->name('delete');
        });

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/books/details/{slug}', [BookController::class, 'show'])->name('books.show');
    Route::post('/review', [BookReviewController::class, 'writeReview'])->name('review.perform');
});
