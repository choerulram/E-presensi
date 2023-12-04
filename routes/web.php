<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\DosenAbsensiController;
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
    return view('dosen.dashboard');
});

Route::get('/absensi', [DosenAbsensiController::class, 'index']);
Route::get('/notifikasi', function () {
    return view('dosen.notifikasi');
});

