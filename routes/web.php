<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\RekeningController;
use App\Http\Controllers\TerimaBukuController;
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

Route::post('/login', [AuthController::class, 'auth']);
Route::post('/register', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/forgot-password', [AuthController::class, 'forgot_password']);

Route::get('/', AdminController::class);
Route::resources(
    [
        'buku' => BukuController::class,
        'kategori' => KategoriController::class,
        'bank' => BankController::class,
        'rekening' => RekeningController::class,
        'provinsi' => ProvinsiController::class,
        'kota' => KotaController::class,
        'kecamatan' => KecamatanController::class,
        'member' => MemberController::class,
        'alamat' => AlamatController::class,
        'terima-buku' => TerimaBukuController::class,
        'penjualan' => PenjualanController::class,
    ],
    [
        'except' => ['create', 'show'],
    ]
);
Route::get('/penjualan/report', [PenjualanController::class, 'laporan_penjualan']);
Route::get('/keuangan', KeuanganController::class);
