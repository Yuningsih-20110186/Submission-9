<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Prodi\ProdiController;
use App\Http\Controllers\Mahasiswa\MahasiswaController;
use App\Http\Controllers\MataKuliah\MataKuliahController;

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
    return view('welcome');
});

Route::group(['prefix' => 'dosen'], function () {
    Route::get('/index', [DosenController::class, 'index'])->name('dosen.index');
    Route::get('/create', [DosenController::class, 'create'])->name('dosen.create');
    Route::post('/store', [DosenController::class, 'store'])->name('dosen.store');
    Route::get('/show/{id}', [DosenController::class, 'show'])->name('dosen.show');
    Route::get('/edit/{id}', [DosenController::class, 'edit'])->name('dosen.edit');
    Route::put('/update/{id}', [DosenController::class, 'update'])->name('dosen.update');
    Route::delete('/delete/{id}', [DosenController::class, 'delete'])->name('dosen.delete');
});

Route::group(['prefix' => 'mahasiswa'], function () {
    Route::get('/index', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/show/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
    Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/update/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::delete('/delete/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');
});

Route::group(['prefix' => 'matakuliah'], function () {
    Route::get('/index', [MataKuliahController::class, 'index'])->name('matakuliah.index');
    Route::get('/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
    Route::post('/store', [MataKuliahController::class, 'store'])->name('matakuliah.store');
    Route::get('/show/{id}', [MataKuliahController::class, 'show'])->name('matakuliah.show');
    Route::get('/edit/{id}', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');
    Route::put('/update/{id}', [MataKuliahController::class, 'update'])->name('matakuliah.update');
    Route::delete('/delete/{id}', [MataKuliahController::class, 'delete'])->name('matakuliah.delete');
});

Route::group(['prefix' => 'prodi'], function () {
    Route::get('/index', [ProdiController::class, 'index'])->name('prodi.index');
    Route::get('/create', [ProdiController::class, 'create'])->name('prodi.create');
    Route::post('/store', [ProdiController::class, 'store'])->name('prodi.store');
    Route::get('/show/{id}', [ProdiController::class, 'show'])->name('prodi.show');
    Route::get('/edit/{id}', [ProdiController::class, 'edit'])->name('prodi.edit');
    Route::put('/update/{id}', [ProdiController::class, 'update'])->name('prodi.update');
    Route::delete('/delete/{id}', [ProdiController::class, 'delete'])->name('prodi.delete');
});
