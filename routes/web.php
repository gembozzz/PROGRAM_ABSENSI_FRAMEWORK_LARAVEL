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

Route::get('/', function () {
    return view('depan');
});

Auth::routes();

// route untuk sqan kartu
Route::get('/masuk', [App\Http\Controllers\DepanController::class, 'masuk']);
Route::post('/masuk', [App\Http\Controllers\DepanController::class, 'storemasuk']);
Route::get('/keluar', [App\Http\Controllers\DepanController::class, 'keluar']);
Route::post('/keluar', [App\Http\Controllers\DepanController::class, 'storekeluar']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// route untuk menu data siswa
Route::get('/data_siswa', [App\Http\Controllers\SiswaController::class, 'index'])->middleware('auth');
Route::get('/tambah_siswa', [App\Http\Controllers\SiswaController::class, 'create'])->middleware('auth');
Route::post('/tambah_siswa', [App\Http\Controllers\SiswaController::class, 'store'])->middleware('auth');
Route::get('/hapus_siswa/{siswa}', [App\Http\Controllers\SiswaController::class, 'destroy'])->middleware('auth');
Route::get('/ubah_siswa/{siswa}', [App\Http\Controllers\SiswaController::class, 'edit'])->middleware('auth');
Route::post('/ubah_siswa', [App\Http\Controllers\SiswaController::class, 'update'])->middleware('auth');
Route::get('/detail_siswa/{siswa}', [App\Http\Controllers\SiswaController::class, 'show'])->middleware('auth');
Route::get('/cetak_kartu', [App\Http\Controllers\SiswaController::class, 'showtwo'])->middleware('auth');

// route untuk menu jadwal
Route::get('/jadwal', [App\Http\Controllers\JadwalController::class, 'index'])->middleware('auth');
Route::get('/tambah_jadwal', [App\Http\Controllers\JadwalController::class, 'create'])->middleware('auth');
Route::post('/tambah_jadwal', [App\Http\Controllers\JadwalController::class, 'store'])->middleware('auth');
Route::get('/hapus_jadwal/{jadwal}', [App\Http\Controllers\JadwalController::class, 'destroy'])->middleware('auth');
Route::get('/ubah_jadwal/{jadwal}', [App\Http\Controllers\JadwalController::class, 'edit'])->middleware('auth');
Route::post('/ubah_jadwal', [App\Http\Controllers\JadwalController::class, 'update'])->middleware('auth');

// route untuk menu waktu
Route::get('/waktu', [App\Http\Controllers\WaktuController::class, 'index'])->middleware('auth');
Route::get('/ubah_waktu/{waktu}', [App\Http\Controllers\WaktuController::class, 'edit'])->middleware('auth');
Route::post('/ubah_waktu', [App\Http\Controllers\WaktuController::class, 'update'])->middleware('auth');

//route untuk menu profile
Route::get('/profile', [App\Http\Controllers\UserController::class, 'index'])->middleware('auth');
Route::get('/setting_profile', [App\Http\Controllers\UserController::class, 'edit'])->middleware('auth');
Route::post('/setting_profile', [App\Http\Controllers\UserController::class, 'update'])->middleware('auth');
Route::get('/edit_profile', [App\Http\Controllers\UserController::class, 'edittwo'])->middleware('auth');
Route::post('/edit_profile', [App\Http\Controllers\UserController::class, 'updatetwo'])->middleware('auth');

//route untuk menu laporan
Route::get('/laporan', [App\Http\Controllers\LaporanController::class, 'index'])->middleware('auth');
Route::post('/laporan', [App\Http\Controllers\LaporanController::class, 'pencarian'])->middleware('auth');
Route::get('/cetak-laporan', [App\Http\Controllers\LaporanController::class, 'cetak'])->middleware('auth');
Route::get('/export-laporan', [App\Http\Controllers\LaporanController::class, 'export'])->middleware('auth');
