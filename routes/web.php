<?php

use App\Http\Controllers\AntrianController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [Controller::class, 'index']);
Route::get('/link-terkait', [Controller::class, 'linkTerkait'])->name('link-terkait');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/pegawai', [Controller::class, 'pegawai'])->name('pegawai');
Route::get('/berita', [BeritaController::class, 'berita'])->name('blog');
Route::get('/antrian', [AntrianController::class, 'index'])->name('antrian');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('blog.show');

Route::middleware(['auth'])->group(function () {
    Route::resource('/admin/blog', BeritaController::class)->except(['show']);
    Route::post('/admin/blog/media', [BeritaController::class, 'storeMedia'])->name('blogs.storeMedia');
    Route::get('/admin/blog/{id}/media', [BeritaController::class, 'getMedia'])->name('blogs.media');
    Route::resource('/admin/user', UserController::class);
    // Route::get('/admin/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
    // Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/logout', function () {
    auth()->logout();
    return redirect('/login');
})->name('logout');
