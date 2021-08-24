<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\ruangLingkupController;
use App\Http\Controllers\skemaSertifikasiController;
use App\Http\Controllers\strukturOrganisasiController;
use App\Http\Controllers\visimisiController;

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
})->name('welcome');

Route::get('/ruanglingkup', [ruangLingkupController::class, 'index'])->name('ruangLingkup');
Route::get('/skemasertifikasi', [skemaSertifikasiController::class, 'index'])->name('skemasertifikasi');
Route::get('/strukturorganisasi', [strukturOrganisasiController::class, 'index'])->name('strukturorganisasi');
Route::get('/visimisi', [visimisiController::class, 'index'])->name('visimisi');
Route::get('/kontak', [kontakController::class, 'index'])->name('kontak');
