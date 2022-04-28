<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function dashboard(){
        $page = 'dashboard';

        return view('user.dashboarduser', compact('page'));

    }

    public function sitehome(){
        $page = 'sitehome';

        return view('user.sitehome', compact('page'));

    }

    public function participants(){
        $page = 'participants';

        return view('user.participants', compact('page'));

    }

    public function matakuliah(){
        $page = 'matakuliah';

        return view('user.matakuliah', compact('page'));

    }

    public function absen(){
        $page = 'absen';

        return view('user.absen', compact('page'));

    }

    public function tugas(){
        $page = 'tugas';

        return view('user.tugas', compact('page'));

    }

    public function profile(){
        $page = 'profile';

        $mahasiswa = Mahasiswa::join('users','mahasiswas.user','=','users.NIK')->select('mahasiswas.NIM','users.first_name','users.last_name','users.email','users.nomor_hp','users.jenis_kelamin','users.agama','users.kewarganegaraan','users.alamat','users.tgl_lahir')->get();

        $dosen = Dosen::join('users','dosens.user','=','users.NIK')->select('dosens.NIP','users.first_name','users.last_name','users.email','users.nomor_hp','users.jenis_kelamin','users.agama','users.kewarganegaraan','users.alamat','users.tgl_lahir')->get();

        return view('user.profile', [
            'page'=> $page,
            'mahasiswa'=>$mahasiswa[0],
            'dosen'=>$dosen[0]

        ]);

        // return view('user.profile', compact('users'));

    }

    public function editprofil(){
        $page = 'editprofil';

        return view('user.editprofil', compact('page'));

    }

    public function pilihanjurusan(){
        $page = 'pilihanjurusan';

        return view('user.pilihanjurusan', compact('page'));

    }

    public function enrollmatkul(){
        $page = 'enrollmatkul';

        return view('user.enrollmatkul', compact('page'));

    }

    
}
