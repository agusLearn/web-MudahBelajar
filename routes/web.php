<?php

use Illuminate\Support\Facades\Route;


// ------------------ ROUTE UNTUK HALAMAN TAMPILAN USER ------------------

Route::get('/', function () {
    return view('mainPages.home');
})->name('beranda');

Route::get('/detail', function () {
    return view('mainPages.detailArtikel');
})->name('detailArtikel');

// ------------------ END UNTUK ROUTE HALAMAN TAMPILAN USER ------------------


// ---------------- Route Login and Register ---------------------
Route::prefix('Login')->group(function(){
    Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'loginPage'])->name('loginPage');
    Route::post('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

    Route::get('/registerPage', [\App\Http\Controllers\Auth\RegisterController::class, 'registerPage'])->name('register');
    Route::post('/prosesRegister', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('registration');
});
// ---------------- END Route Login and Register ---------------------


// ------------------  ROUTE UNTUK HALAMAN TAMPILAN ADMIN  ------------------
Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function(){
    Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'viewAdmin'])->name('adminPages');
    Route::get('/tableArticle', [\App\Http\Controllers\Admin\ArticleController::class, 'TableArticle'])->name('tableArticle');
    Route::get('/createArticle', [\App\Http\Controllers\Admin\CreateArticleController::class, 'viewCreateArticle_form'])->name('createArticlePages');



    Route::post('/prosesCreateArticle', [\App\Http\Controllers\Admin\CreateArticleController::class, 'prosesCreateArticle'])->name('createArticle');
});
// ------------------ END ROUTE HALAMAN ADMIN ------------------


// Proses Logout
Route::get('/prosesLogout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');





// Route::get('/', function () {
//     return view('welcome');
// });


// // END UNTUK ROUTE HALAMAN TAMPILAN ADMIN

// // Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
