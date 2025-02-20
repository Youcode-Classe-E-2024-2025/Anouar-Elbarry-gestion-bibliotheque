<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
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

Route::get('/',[BookController::class,'Last3books'])->name('last3books');
// Route::get('/books', function () {
//     return view('front/books/list');
// });
Route::get('/books/details/{book}',[BookController::class,'show'])->name('details');
Route::get('/auth', function () {
    return view('front/auth');
});
Route::get('/profile', function () {
    return view('front/profile');
});

// back

Route::get('/books',[BookController::class,'index'])->name('list');