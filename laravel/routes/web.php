<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[BookController::class,'Last4books'])->name('last3books');
// Route::get('/books', function () {
//     return view('front/books/list');
// });
Route::get('/books/details/{book}',[BookController::class,'show'])->name('details');
Route::get('/auth',[AuthController::class,'index'])->name('showlogin');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::post('/inroll',[BorrowController::class,'index'])->name('Borrow');
Route::get('/myBooks', [BorrowController::class, 'show'])->name('showmyBooks');
Route::get('/profile',[ProfileController::class,'index'])->name('showProfile');

// back

Route::get('/books',[BookController::class,'index'])->name('list');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::post('/dashboard/createBook',[DashboardController::class,'createBook'])->name('create.book');