<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Pertemuan;

class KelasController extends Controller
{
    public function kelas($id){
        $page = 'kelas';

        //judul kelas
        $kelas = Kelas::join('mata_kuliahs','kelas.mata_kuliah','=','mata_kuliahs.kode_mata_kuliah')
        ->select('kelas.mata_kuliah','kelas.kelas','kelas.kelas_id','mata_kuliahs.nama_matkul')->where('kelas.kelas_id', $id)->get();
        
        //show pertemuan
        $pertemuan = Pertemuan::join('kelas','pertemuans.kelas','=','kelas.kelas_id')->select('pertemuans.nama_pertemuan','pertemuans.deskripsi','pertemuans.tanggal_pertemuan','pertemuans.pertemuan_id','pertemuans.kelas','kelas.kelas_id')->where('kelas.kelas_id', $id)->get();
        
        //Materi

        //Tugas

        //Absensi

        return view('user.matakuliah', [
            'page'=> $page,
            'pertemuan'=>$pertemuan,
            'kelas'=>$kelas
        
        ]);

        // return view('user.matakuliah', compact('page'));

    }
}
