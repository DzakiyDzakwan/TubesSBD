<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Pertemuan;

class KelasController extends Controller
{
    public function kelas($id){
        $page = 'kelas';

        //Pertemuan
        $pertemuan = Pertemuan::select('nama_pertemuan', 'deskripsi', 'tanggal_pertemuan')->where('kelas', $id)->get();
        
        //Materi

        //Tugas

        //Absensi

        return view('user.matakuliah', [
            'page'=> $page,
            'pertemuan'=>$pertemuan,
        
        ]);

        // return view('user.matakuliah', compact('page'));

    }
}
