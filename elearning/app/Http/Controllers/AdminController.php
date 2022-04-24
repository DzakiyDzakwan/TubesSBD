<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\Mata_kuliah;
use App\Models\Kelas;

class AdminController extends Controller
{
    
    public function dashboard() {
        $page = 'dashboard';

        return view('admin.dashboardadmin', compact('page'));
    }

    public function user() {
        $page = 'user';

        $user = User::select('NIK', 'first_name', 'last_name', 'email', 'nomor_hp', 'agama', 'jenis_kelamin', 'status')->get();
        //$user = User::select('NIK', 'first_name', 'last_name', 'email', 'nomor_hp', 'agama', 'jenis_kelamin', 'status')->skip(0)->take(5)->get();
        $jurusan = Jurusan::get();

        return view('admin.user', [
            'page'=> $page,
            'users'=>$user,
            'jurusans'=>$jurusan
        ]);
    }

    public function mahasiswaStore(Request $request) {

        Mahasiswa::create([

            'NIM'=> $request->NIM,
            'NISN'=> $request->NISN,
            'program'=>$request->program,
            'angkatan'=>$request->angkatan,
            'jurusan'=>$request->jurusan,
            'semester'=> 'I',
            'status'=>'aktif',
            'user'=>$request->NIK

        ]);

        return back();

    }

    public function dosenStore(Request $request) {

        Dosen::create([
            'NIP'=> $request->NIP,
            'NIDN'=> $request->NIDN,
            'user'=> $request->NIK,
            'status'=>'aktif'
            
        ]);

        return back();

    }

    public function mahasiswa() {
        $page = 'mahasiswa';

        $mahasiswa = Mahasiswa::join('jurusans','mahasiswas.jurusan', '=', 'jurusans.kode_jurusan')->join('users', 'mahasiswas.user', '=', 'users.NIK')->select('mahasiswas.NIM', 'mahasiswas.semester', 'mahasiswas.angkatan', 'mahasiswas.status' ,'users.first_name', 'users.last_name', 'jurusans.nama_jurusan')->get();

        return view('admin.mahasiswa', [
            'page'=> $page,
            'mahasiswa'=>$mahasiswa
        ]);
    }

    public function dosen() {

        $page = 'dosen';

        $dosen =  Dosen::join('users', 'dosens.user', '=', 'users.NIK')->select('dosens.NIP', 'users.first_name', 'users.last_name', 'dosens.NIDN', 'dosens.status')->get();
        /* $dosen =  Dosen::join('users', 'dosens.user', '=', 'users.NIK')->select('dosens.NIP', 'users.first_name', 'users.last_name', 'dosens.NIDN', 'dosens.status')->take(0)->skip(5)->get(); */

        return view('admin.dosen', [
            'page' => $page,
            'dosens' => $dosen,
        ]);

    }

    public function faculty() {
        $page  = 'faculty';

        $fakultas = Fakultas::get();
        $jurusan = Jurusan::join('fakultas', 'jurusans.fakultas_id' , '=', 'fakultas.kode_fakultas')->get();
        $matakuliah = Mata_kuliah::join('jurusans', 'mata_kuliahs.jurusan', '=', 'jurusans.kode_jurusan')->get();
        $kelas = Kelas::join('mata_kuliahs', 'kelas.mata_kuliah', '=', 'mata_kuliahs.kode_mata_kuliah')->join('dosens', 'kelas.dosen', '=', 'dosens.NIP')->join('users', 'dosens.user', '=', 'users.NIK')->select('kelas.kelas_id', 'mata_kuliahs.nama_matkul', 'users.first_name', 'users.last_name')->get();

        return view('admin.faculty', [
            'page'=>$page,
            'fakultas'=>$fakultas,
            'jurusans'=>$jurusan,
            'matakuliah'=>$matakuliah,
            'kelas'=>$kelas

        ]);
    }

}
