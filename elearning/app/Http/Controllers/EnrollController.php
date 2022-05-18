<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\Mata_kuliah;
use App\Models\Kelas;
use App\Models\Enrollment;

class EnrollController extends Controller
{
    
    public function sitehome(){
        $page = 'sitehome';

        $fakultas = Fakultas::all();
        // return view('user.sitehome', compact('fakultas'));

        // $fakultas = Fakultas::join('jurusans','')

        $jurusans = Jurusan::join('fakultas','jurusans.fakultas_id','=','fakultas.kode_fakultas')->select('jurusans.kode_jurusan','jurusans.nama_jurusan','jurusans.fakultas_id','fakultas.kode_fakultas','fakultas.nama_fakultas')->get();

        return view('user.sitehome', [
            'page'=> $page,
            'jurusans'=>$jurusans,
            'fakultas'=>$fakultas
        ]);

        // return view('user.sitehome', compact('page'));

    }

    public function jurusan( $id){
        $page = 'pilihanjurusan';

        // $jurusans = Jurusan::all();
        // return view('user.pilihanjurusan', compact('jurusans'));

        $jurusans = Jurusan::join('fakultas','jurusans.fakultas_id','=','fakultas.kode_fakultas')->select('jurusans.kode_jurusan','jurusans.nama_jurusan','jurusans.fakultas_id','fakultas.kode_fakultas','fakultas.nama_fakultas')->where('fakultas.kode_fakultas', $id )->get();

        return view('user.pilihanjurusan', [
            'page'=> $page,
            'jurusans'=>$jurusans
        
        ]);
        
        //return view('user.pilihanjurusan', compact('page'));

    }

    public function pilihanmatkul($id){
        $page = 'pilihanmatkul';

        $kelas = Kelas::join('dosens','kelas.dosen','=','dosens.NIP')
        ->join('mata_kuliahs','kelas.mata_kuliah','=','mata_kuliahs.kode_mata_kuliah')
        ->join('users','dosens.user','=','users.NIK')
        ->join('jurusans','mata_kuliahs.jurusan','=','jurusans.kode_jurusan')
        ->select('kelas.kelas_id','kelas.kelas','kelas.mata_kuliah','kelas.dosen','dosens.NIP','dosens.user','mata_kuliahs.nama_matkul','mata_kuliahs.jurusan','users.first_name','users.last_name','jurusans.nama_jurusan')
        ->where('jurusans.kode_jurusan', $id)
        ->get();

        return view('user.pilihanmatkul', [
            'page'=>$page,
            'kelas'=>$kelas
        ]);
    }

    public function enrollmatkul($id){
        $page = 'enrollmatkul';

        $nik = auth()->user()->NIK;
        //Ambil kelas bedasarkan id jurusan yang dipilih

        $kelas = Kelas::join('dosens','kelas.dosen','=','dosens.NIP')->join('mata_kuliahs','kelas.mata_kuliah','=','mata_kuliahs.kode_mata_kuliah')->join('users','dosens.user','=','users.NIK')->join('jurusans','mata_kuliahs.jurusan','=','jurusans.kode_jurusan')->select('kelas.kelas_id','kelas.kelas','kelas.mata_kuliah','kelas.dosen','dosens.NIP','dosens.user','mata_kuliahs.nama_matkul','mata_kuliahs.jurusan','users.first_name','users.last_name','jurusans.nama_jurusan','users.NIK')
        ->where('kelas.kelas_id', $id)
        ->get();

        return view('user.enrollmatkul', [
            'page'=> $page,
            'kelas'=>$kelas
        ]);

        //return view('user.enrollmatkul', compact('page'));

    }

    public function enroll(Request $request) {

        //Create data tabel enrollment kelas
        Enrollment::create([
            'enroll_id' => $request->enroll_id,
            'user' => $request->user,
            'kelas' => $request->kelas,
            'role'=>'student'

        ]);
        return redirect('/user/sitehome/');

    }


}
