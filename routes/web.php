<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// ROUTE UNTUK HALAMAN TAMPILAN USER

Route::get('/', function () {
    return view('mainPages.home');
})->name('beranda');

Route::get('/detail', function () {
    return view('mainPages.detailArtikel');
})->name('detailArtikel');

// END UNTUK ROUTE HALAMAN TAMPILAN USER


// ---------------- Route Login and Register ---------------------
Route::prefix('Login')->group(function(){
    Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'loginPage'])->name('login');

    Route::get('/registerPage', [\App\Http\Controllers\Auth\RegisterController::class, 'registerPage'])->name('register');
});
// ---------------- END Route Login and Register ---------------------



// ROUTE UNTUK HALAMAN TAMPILAN ADMIN

Route::get('/admin', function () {
    return view('adminPages.admin');
})->name('adminpages');

Route::get('/createArticle', function(){
    return view('adminPages.createArticle');
})->name('createArticlePages');

// END UNTUK ROUTE HALAMAN TAMPILAN ADMIN

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
