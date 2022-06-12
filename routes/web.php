<?php

use App\Http\Controllers\MahasiswaController;
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

Route::get('/', [MahasiswaController::class, 'index'])->name('home');
Route::get('/tambah', [MahasiswaController::class, 'create'])->name('tambah');
Route::post('/tambah', [MahasiswaController::class, 'store']);
Route::get('/edit/{mahasiswa:nrp}', [MahasiswaController::class, 'edit'])->name('edit');
Route::put('/edit/{mahasiswa:nrp}', [MahasiswaController::class, 'update']);
Route::delete('/delete/{mahasiswa:nrp}', [MahasiswaController::class, 'destroy'])->name('hapus');
Route::get('/about', function () {
    return view('about', ['title' => 'About Me']);
});
