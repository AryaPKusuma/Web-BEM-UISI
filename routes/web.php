<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\BeritaPage;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\StrukturContoller;
use Faker\Guesser\Name;
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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/berita', function () {
//     return view('news');
// });
Route::get('/kementrian', function () {
    return view('kementrian');
});

// Route::get('/dokumen', function () {
//     return view('dokumen');
// });

// Route::get('app', [StrukturContoller::class, 'index']);
Route::resource('berita', BeritaPage::class);
Route::resource('dokumen', DocumentController::class);
Route::resource('/', HomeController::class);
Route::resource('arsip', ArsipController::class);
