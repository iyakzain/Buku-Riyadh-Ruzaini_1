<?php

use App\Http\Controllers\UserKontroler;
use App\Http\Controllers\AkunKontroler;
use App\Http\Controllers\BukuKontroler;
use App\Http\Controllers\SirkulasiController;
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
//     return view('lo');
// });

// Route::get('user', 'AkunKontroler@login')->name('user');
// Route::get('/', 'AkunKontroler@login');

// Route::resource('users', UserKontroler::class);
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [UserKontroler::class, 'login'])->name('login');
    Route::get('/daftar', [UserKontroler::class, 'daftar']);
});
Route::post('/mendaftar', [UserKontroler::class, 'mendaftar']);
Route::post('/auth', [UserKontroler::class, 'auth']);
Route::post('/keluar', [UserKontroler::class, 'keluar']);

Route::middleware(['auth'])->group(function () {
    Route::get('/', [AkunKontroler::class, 'home']);
    Route::get('/buku', [AkunKontroler::class, 'buku']);
    Route::get('/sirkulasi', [AkunKontroler::class, 'sirkulasi']);
    Route::get('/peminjam', [AkunKontroler::class, 'peminjam']);
    Route::get('/buku', [BukuKontroler::class, 'show']);
    Route::get('/sirkulasi', [SirkulasiController::class, 'showSirkulasi']);
});


Route::get('/tambahBuku', [BukuKontroler::class, 'postBuku']);
Route::get('/editBuku/{id}', [BukuKontroler::class, 'editBuku']);
Route::get('/updateBuku', [BukuKontroler::class, 'updateBuku']);
Route::get('/hapus/{id}', [BukuKontroler::class, 'hapus']);

Route::get('/tambahSirkulasi', [SirkulasiController::class, 'postSirkulasi']);
Route::get('/editSirkulasi/edit/{id}', [SirkulasiController::class, 'editSirkulasi']);
Route::get('/updateSirkulasi', [SirkulasiController::class, 'updateSirkulasi']);
Route::get('/hapusSirkulasi/{id}', [SirkulasiController::class, 'hapusSirkulasi']);
Route::get('/sirkulasi/detailPeminjam', [SirkulasiController::class, 'detailPeminjam']);