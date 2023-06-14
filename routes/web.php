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
    return view('welcome');
});

Route::view('contacts', 'contacts')->name('contacts');
Route::view('about', 'about')->name('about');
Route::view('cookie-policy', 'cookie-policy')->name('cookie-policy');
Route::view('user-agreement', 'user-agreement')->name('user-agreement');

Route::view('news', 'news')->name('news');
Route::get('catalog', [])->name('catalog');
