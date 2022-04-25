<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DosenController;

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

/* Route::get('/admin', function () {
    $page = "dashboard";
    return view('dashboardadmin',compact('page'));
}); */

Route::get('/admin', [AdminController::class, 'dashboard']);

Route::get('/admin/user', [AdminController::class, 'user']);

Route::delete('/admin/user/delete-user/{id}', [AdminController::class, 'userDelete']);

Route::post('/admin/user/create-mahasiswa', [AdminController::class, 'mahasiswaStore']);

Route::post('/admin/user/create-dosen', [AdminController::class, 'dosenStore']);

/* ADMIN MAHASISWA */
Route::get('/admin/mahasiswa', [AdminController::class, 'mahasiswa']);

Route::delete('/admin/mahasiswa/delete-mahasiswa/{id}', [AdminController::class, 'mahasiswaDelete']);

/* ADMIN ASLAB */
Route::post('/admin/mahasiswa/add-aslab/{id}', [AdminController::class , 'addAslab']);

Route::delete('/admin/mahasiswa/delete-aslab/{id}', [AdminController::class, 'aslabDelete']);

/* ADMIN DOSEN */
Route::get('/admin/dosen', [AdminController::class, 'dosen']);

Route::delete('/admin/dosen/delete-dosen/{id}', [AdminController::class, 'dosenDelete']);

/* ADMIN FAKULTAS */
Route::get('/admin/faculty', [AdminController::class, 'faculty']);


//LOGIN
Route::get('/login', [LoginController::class, 'login']);

// USER
Route::get('/user', [UserController::class, 'dashboard']);

Route::get('/user/sitehome', [UserController::class, 'sitehome']);

Route::get('/user/participants', [UserController::class, 'participants']);

Route::get('/user/matakuliah', [UserController::class, 'matakuliah']);

Route::get('/user/absen', [UserController::class, 'absen']);

Route::get('/user/tugas', [UserController::class, 'tugas']);

Route::get('/user/profile', [UserController::class, 'profile']);

Route::get('/user/editprofil', [UserController::class, 'editprofil']);

Route::get('/user/pilihanjurusan', [UserController::class, 'pilihanjurusan']);

Route::get('/user/enrollmatkul', [UserController::class, 'enrollmatkul']);

//DOSEN
Route::get('/dosen', [DosenController::class, 'dashboard']);

Route::get('/dosen/sitehome', [DosenController::class, 'sitehome']);

Route::get('/dosen/participants', [DosenController::class, 'participants']);

Route::get('/dosen/matakuliah', [DosenController::class, 'matakuliah']);

Route::get('/dosen/absen', [DosenController::class, 'absen']);

Route::get('/dosen/tugas', [DosenController::class, 'tugas']);

Route::get('/dosen/profile', [DosenController::class, 'profile']);

Route::get('/dosen/editprofil', [DosenController::class, 'editprofil']);

Route::get('/dosen/pilihanjurusan', [DosenController::class, 'pilihanjurusan']);

Route::get('/dosen/enrollmatkul', [DosenController::class, 'enrollmatkul']);


