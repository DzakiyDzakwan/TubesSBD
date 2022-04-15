<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

/* Route::get('/admin/user', function() {
    $page = 'user';
    return view('admin.user', compact('page'));
}); */

/* Route::get('/admin/mahasiswa', function() {
    $page = "mahasiswa";
    return view('admin.mahasiswa', compact('page'));
}); */

/* Route::get('/admin/dosen', function() {
    $page = 'dosen';
    return view('admin.dosen', compact('page'));
}); */

/* Route::get('/admin/faculty', function() {
    $page = 'faculty';
    return view('admin.faculty', compact('page'));
}); */

Route::get('/admin', [AdminController::class, 'dashboard']);

Route::get('/admin/user', [AdminController::class, 'user']);

Route::get('/admin/mahasiswa', [AdminController::class, 'mahasiswa']);

Route::get('/admin/dosen', [AdminController::class, 'dosen']);

Route::get('/admin/faculty', [AdminController::class, 'faculty']);


