<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Models\Course;
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

Route::get('/dashboard', function () {
    return view('dosen.dashboard');
})->middleware('auth');

Route::get('/dashboard-admin', function () {
    return view('admin.dashboard');
})->middleware('auth');

// USERS
Route::get('/', function () {
    return view('users.users');
})->middleware('guest');
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/login-dosen', function () {
    return view('users.login-dosen');
});


// DOSEN
Route::get('/notifikasi', function () {
    return view('dosen.notifikasi');
});
Route::get('/attendance', [AttendanceController::class, 'index'])->middleware('auth');
Route::get('/attendance-add', [AttendanceController::class, 'create'])->middleware('auth');
Route::post('/attendance', [AttendanceController::class, 'store'])->middleware('auth');
Route::get('/attendance-edit/{id}', [AttendanceController::class, 'edit'])->middleware('auth');
// Route::put('/attendance/{id}', [AttendanceController::class, 'update'])->middleware('auth');
// Route::get('/attendance-delete/{id}', [AttendanceController::class, 'delete'])->middleware('auth');
// Route::delete('/attendance-destroy/{id}', [AttendanceController::class, 'destroy'])->middleware('auth');

// ADMIN
Route::get('/notifikasi-admin', function () {
    return view('admin.notifikasi');
});
Route::get('/lecturer-admin', function () {
    return view('admin.lecturer');
});
Route::get('/course-admin', function () {
    return view('admin.course');
});
Route::get('/class-admin', function () {
    return view('admin.class');
});

Route::get('/course', [CourseController::class, 'index'])->middleware('auth');
Route::get('/course-add', [CourseController::class, 'create'])->middleware('auth');


Route::get('/lecturer', [LecturerController::class, 'index'])->middleware('auth');

Route::get('/class', [ClassController::class, 'index'])->middleware('auth');

Route::get('/student', [StudentController::class, 'index'])->middleware('auth');
Route::get('/student-add', [StudentController::class, 'create'])->middleware('auth');
Route::post('/student', [StudentController::class, 'store'])->middleware('auth');
Route::get('/student-edit/{id}', [StudentController::class, 'edit'])->middleware('auth');
Route::put('/student/{id}', [StudentController::class, 'update'])->middleware('auth');
Route::get('/student-deletep/{id}', [StudentController::class, 'delete'])->middleware('auth');
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy'])->middleware('auth');






