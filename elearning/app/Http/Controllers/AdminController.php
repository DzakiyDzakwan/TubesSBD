<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function dashboard() {
        $page = 'dashboard';

        return view('admin.dashboardadmin', compact('page'));
    }

    public function user() {
        $page = 'user';

        return view('admin.user', compact('page'));
    }

    public function mahasiswa() {
        $page = 'mahasiswa';

        return view('admin.mahasiswa', compact('page'));
    }

    public function dosen() {

        $page = 'dosen';

        return view('admin.dosen', compact('page'));

    }

    public function faculty() {
        $page  = 'faculty';

        return view('admin.faculty', compact('page'));
    }

}
