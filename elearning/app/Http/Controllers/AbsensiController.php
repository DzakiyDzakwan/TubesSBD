<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Mahasiswa;
use App\Models\Pertemuan;
use App\Models\Kelas;

class AbsensiController extends Controller
{
    //create absensi, store absensi, delete absensi, edit absensi

    public function absen($id){
        $page = 'absen';

        $nik = auth()->user()->NIK;

        $mahasiswas=Mahasiswa::join('users','mahasiswas.user','=','users.NIK')->select('mahasiswas.NIM','users.NIK')->where('users.NIK', $nik)->get();

        // $pertemuan = Pertemuan::select('pertemuan_id')
        // ->where('pertemuan_id', $id)->get();

        //menampilkan judul matakuliah
        $pertemuan= Pertemuan::join('kelas','pertemuans.kelas','=','kelas.kelas_id')
        ->join('mata_kuliahs','kelas.mata_kuliah','=','mata_kuliahs.kode_mata_kuliah')
        ->select('pertemuans.pertemuan_id','kelas.mata_kuliah','kelas.kelas','mata_kuliahs.nama_matkul')
        ->where('pertemuans.pertemuan_id', $id)->get();

        $absens = Absensi::join('pertemuans','absensis.pertemuan','=','pertemuans.pertemuan_id')
        ->select('absensis.status','absensis.created_at','absensis.pertemuan','absensis.mahasiswa','absensis.absensi_id','pertemuans.pertemuan_id','pertemuans.tanggal_pertemuan')
        ->where('pertemuans.pertemuan_id', $id)
        ->get();

        return view('user.absen', [
            'page'=> $page,
            'absens' => $absens,
            'mahasiswas'=>$mahasiswas,
            'pertemuan'=>$pertemuan,
        ]);

        //return view('user.absen', compact('page'));

    }

    //submit absen mahasiswa
    public function absenStore(Request $request){
        // $page = 'submitabsen';

        $nik = auth()->user()->NIK;

        $mahasiswas=Mahasiswa::join('users','mahasiswas.user','=','users.NIK')->select('mahasiswas.NIM','users.NIK')->where('users.NIK', $nik)->get();

        Absensi::create([
            'absensi_id'=>$request->absensi_id,
            'mahasiswa'=>$request->mahasiswa,
            'status'=>$request->status,
            'pertemuan'=>$request->pertemuan
        ]);

        return back();

    }
}
