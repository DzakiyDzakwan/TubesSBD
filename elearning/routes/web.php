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

Route::get('/admin', [AdminController::class, 'dashboard']);

Route::get('/admin/user', [AdminController::class, 'user']);

Route::get('/admin/mahasiswa', [AdminController::class, 'mahasiswa']);

Route::get('/admin/dosen', [AdminController::class, 'dosen']);

Route::get('/admin/faculty', [AdminController::class, 'faculty']);


