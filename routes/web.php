<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\FarmasiController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\TiketController;
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
    return redirect('auth/login');
});

Route::prefix('auth')->group(function(){
    Route::get('login', [AuthController::class, 'index']);
    Route::post('login', [AuthController::class, 'login']);
    Route::get('register', [AuthController::class, 'register']);
    Route::post('register', [AuthController::class, 'store']);
});

Route::get('home', function(){
    return view('pages.home.index');
});

Route::prefix('pendaftaran')->group(function(){
    Route::get('/', [PendaftaranController::class, 'index']);
    Route::get('create', [PendaftaranController::class, 'create']);
    Route::post('store', [PendaftaranController::class, 'store']);
});

Route::prefix('farmasi')->group(function(){
    Route::get('/', [FarmasiController::class, 'index']);
});

Route::prefix('checkout')->group(function(){
    Route::get('/{obat_id}', [CheckoutController::class, 'index']);
    Route::get('/order-confirmation/{obat_id}', [CheckoutController::class, 'orderConfirmation']);
});

Route::prefix('dokter')->group(function(){
    Route::get('/', [DokterController::class, 'index']);
});

Route::prefix('tiket')->group(function(){
    Route::get('/', [TiketController::class, 'index']);
});

Route::get('logout', [AuthController::class, 'logout']);