<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Enrollment;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Kelas;

class DashboardUserController extends Controller
{
    public function dashboard() {

        $nik = auth()->user()->NIK;

        if(auth()->user()->status === 'mahasiswa'){
        //sidebar
        $kelas = Enrollment::join('kelas','enrollments.kelas','=','kelas.kelas_id')->join('mata_kuliahs','kelas.mata_kuliah','=','mata_kuliahs.kode_mata_kuliah')->join('dosens', 'kelas.dosen', '=', 'dosens.NIP')->join('users', 'dosens.user' , '=', 'users.NIK')->select('enrollments.kelas', 'kelas.kelas','mata_kuliahs.nama_matkul', 'users.first_name', 'users.last_name', 'mata_kuliahs.kode_mata_kuliah')->where('enrollments.user',$nik)->get();

        //navbar user
        $mahasiswa = Mahasiswa::join('users','mahasiswas.user','=','users.NIK')->select('mahasiswas.NIM','users.first_name','users.last_name')->where('mahasiswas.user', $nik)->get();
        } elseif(auth()->user()->status === 'dosen') {

            //sidebar
            $kelas = Kelas::join('dosens', 'kelas.dosen', '=', 'dosens.NIP')->join('users', 'dosens.user', '=', 'users.NIK')->join('mata_kuliahs', 'kelas.mata_kuliah', '=', 'mata_kuliahs.kode_mata_kuliah')->select('mata_kuliahs.nama_matkul', 'mata_kuliahs.kode_mata_kuliah', 'kelas.kelas', 'users.first_name', 'users.last_name')->where('dosens.user', $nik)->get();

            //navbar dosen
            $dosen = Dosen::join('users','dosens.user','=','users.NIK')->select('dosens.NIP','users.first_name','users.last_name')->where('dosens.user', $nik)->get();

        }

        return view('user.dashboarduser',[
            'enrollmatkul' => $kelas
        ]);


    }
}
