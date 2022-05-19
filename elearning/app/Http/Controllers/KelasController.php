<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Pertemuan;
use App\Models\Enrollment;

class KelasController extends Controller
{
    public function kelas($id){
        $page = 'kelas';
        $nik = auth()->user()->NIK;

        //Pertemuan
        $pertemuan = Pertemuan::select('nama_pertemuan', 'deskripsi', 'tanggal_pertemuan')->where('kelas', $id)->get();

        //Materi
        if(auth()->user()->status === 'mahasiswa'){


            $kelas = Enrollment::join('kelas','enrollments.kelas','=','kelas.kelas_id')->join('mata_kuliahs','kelas.mata_kuliah','=','mata_kuliahs.kode_mata_kuliah')->join('dosens', 'kelas.dosen', '=', 'dosens.NIP')->join('users', 'dosens.user' , '=', 'users.NIK')->select('enrollments.kelas','kelas.kelas_id', 'kelas.kelas','mata_kuliahs.nama_matkul', 'users.first_name', 'users.last_name', 'mata_kuliahs.kode_mata_kuliah')->where('enrollments.user',$nik)->get();

        } elseif(auth()->user()->status === 'dosen') {

            //sidebar
            $kelas = Kelas::join('dosens', 'kelas.dosen', '=', 'dosens.NIP')->join('users', 'dosens.user', '=', 'users.NIK')->join('mata_kuliahs', 'kelas.mata_kuliah', '=', 'mata_kuliahs.kode_mata_kuliah')->select('mata_kuliahs.nama_matkul', 'mata_kuliahs.kode_mata_kuliah','kelas.kelas_id', 'kelas.kelas', 'users.first_name', 'users.last_name')->where('dosens.user', $nik)->get();

        }
        //Tugas

        //Absensi

        return view('user.matakuliah', [
            'enrollmatkul' => $kelas,
            'page'=> $page,
            'pertemuan'=>$pertemuan,
        
        ]);

        // return view('user.matakuliah', compact('page'));

    }

    public function storePertemuan(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pertemuan' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'tanggal_pertemuan' => 'required',
            'kelas' => 'required',
        ]);

        Pertemuan::create($validatedData);

        return back()->with('success', 'mantap bro');
    }   
}
