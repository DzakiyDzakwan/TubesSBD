<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\TugasController;


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

//TEST ADMIN

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

Route::post('/admin/faculty/create-fakultas', [AdminController::class, 'fakultasStore']);

Route::delete('/admin/faculty/delete-fakultas/{id}', [AdminController::class, 'fakultasDelete']);

Route::post('/admin/faculty/create-jurusan', [AdminController::class, 'jurusanStore']);

Route::delete('/admin/faculty/delete-jurusan/{id}', [AdminController::class, 'jurusanDelete']);

Route::post('/admin/faculty/create-matkul', [AdminController::class, 'matkulStore']);

Route::delete('/admin/faculty/delete-matkul/{id}', [AdminController::class, 'matkulDelete']);

Route::post('/admin/faculty/create-kelas', [AdminController::class, 'kelasStore']);

Route::delete('/admin/faculty/delete-kelas/{id}', [AdminController::class, 'kelasDelete']);


// LOGIN
Route::get('/', [LoginController::class, 'login'])->name('login');

Route::post('/', [LoginController::class, 'authenticate']);

// LOGOUT
Route::post('/logout', [LoginController::class, 'logout']);

// REGISTER
Route::get('/register', [RegisterController::class, 'register']);

Route::post('/register', [RegisterController::class, 'store']);


// USER

//Enrollment Kelas
Route::get('/user/sitehome', [EnrollController::class, 'sitehome']);
Route::get('/user/pilihanjurusan/{id}', [EnrollController::class, 'jurusan']);
Route::get('/user/enrollmatkul', [EnrollController::class, 'matkul']);

//Dashboard User
Route::get('/dashboard', [DashboardController::class, 'index']);

//Profil User
Route::get('/user/profile', [ProfilController::class, 'profile']);
Route::get('/user/editprofil/{id}', [ProfilController::class, 'editprofil']);
Route::put('/user/updateprofile/{id}', [ProfilController::class, 'updateprofile']);

//Kelas
Route::get('/user/kelas', [KelasController::class, 'matakuliah']);

//Pertemuan
Route::post('/user/matakuliah/createPertemuan', [PertemuanController::class, 'pertemuanStore']);

//Participant
Route::get('/user/participants', [ParticipantController::class, 'index']);

//Absensi
Route::get('/user/absen', [AbsensiController::class, 'absen']);
Route::post('/user/absen/add-absen', [AbsensiController::class], 'absenStore');

//Materi


//Tugas
Route::get('/user/tugas', [TugasController::class, 'tugas']);

//Jawaban
 

/* //DOSEN
Route::get('/dosen', [DosenController::class, 'dashboard']);

Route::get('/dosen/sitehome', [DosenController::class, 'sitehome']);

Route::get('/dosen/participants', [DosenController::class, 'participants']);

Route::get('/dosen/matakuliah', [DosenController::class, 'matakuliah']);

Route::get('/dosen/absen', [DosenController::class, 'absen']);

Route::get('/dosen/tugas', [DosenController::class, 'tugas']);

Route::get('/dosen/profile', [DosenController::class, 'profile']);

Route::get('/dosen/editprofil', [DosenController::class, 'editprofil']);

Route::get('/dosen/pilihanjurusan', [DosenController::class, 'pilihanjurusan']);

Route::get('/dosen/enrollmatkul', [DosenController::class, 'enrollmatkul']); */


