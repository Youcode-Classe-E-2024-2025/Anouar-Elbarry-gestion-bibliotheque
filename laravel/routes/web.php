<?php

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
    return view('home');
});
Route::get('/books', function () {
    return view('books/list');
});
Route::get('/books/details', function () {
    return view('books/details');
});
Route::get('/auth', function () {
    return view('auth');
});
Route::get('/profile', function () {
    return view('profile');
});