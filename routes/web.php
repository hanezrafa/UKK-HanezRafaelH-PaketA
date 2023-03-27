<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiUserController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\TanggapanController;
use Illuminate\Auth\Events\Logout;



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
    return view('hello.login.index');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');

Route::get('/register', [RegistrasiController::class, 'index']);
Route::post('/register', [RegistrasiController::class, 'store']);

Route::get('/regis', [RegistrasiUserController::class, 'index']);
Route::post('/regis', [RegistrasiUserController::class, 'store']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::resource('/pengaduan', PengaduanController::class);
Route::resource('/tanggapan', TanggapanController::class);

