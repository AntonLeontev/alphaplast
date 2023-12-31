<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\ProductController;
use App\Mail\NewOrder;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', HomePageController::class)->name('home');

Route::get('contacts', ContactsController::class)->name('contacts');
Route::view('about', 'about')->name('about');
Route::view('cookie-policy', 'cookie-policy')->name('cookie-policy');
Route::view('user-agreement', 'user-agreement')->name('user-agreement');

Route::get('catalog', [CatalogController::class, 'index'])->name('catalog');
Route::get('news', [ArticleController::class, 'index'])->name('news');
Route::get('news/{article:slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('articles/section/{section}', [ArticleController::class, 'loadBySection']);

Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');
Route::post('products/search', [ProductController::class, 'search']);

Route::post('/send-form', function () {
    if (empty(request()->phone) && empty(request()->email)) {
        return response()->json('no data', 422);
    }

    Mail::to(contacts()->email)->send(new NewOrder());

    return response()->json('ok');
});
