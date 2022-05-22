<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Pertemuan;


class MateriController extends Controller
{
    //Create Materi, Delete Materi, Update Materi
    public function materiStore(request $request){

        Materi::create([
            'materi_id'=>$request->materi_id,
            'nama_materi'=>$request->nama_materi,
            'deskripsi'=>$request->deskripsi,
            'pertemuan'=>$request->pertemuan
        ]);
        return back()->with('success', 'Materi berhasil ditambahkan');
    }

    public function createmateri($id){
        $page = 'createmateri';

        $materi= Pertemuan::join('kelas','pertemuans.kelas','=','kelas.kelas_id')
        ->join('mata_kuliahs','kelas.mata_kuliah','=','mata_kuliahs.kode_mata_kuliah')
        ->select('pertemuans.pertemuan_id','kelas.mata_kuliah','kelas.kelas','mata_kuliahs.nama_matkul','kelas.kelas_id')
        ->where('pertemuans.pertemuan_id', $id)->get();
        
        return view('user.createmateripage',[
            'page'=>$page,
            'materi'=>$materi ,

        ]);
    }

    public function editmateri($id){

        $materis = Materi::join('pertemuans','materis.pertemuan','=','pertemuans.pertemuan_id')
        ->join('kelas','pertemuans.kelas','=','kelas.kelas_id')
        ->select('materis.nama_materi','materis.deskripsi','pertemuans.pertemuan_id','kelas.kelas_id','materis.materi_id')->where('materis.materi_id', $id)->get();

        return view('user.editmateri',[
            'materis'=>$materis
        ]);
    }

    public function updatemateri(Request $request){

        Materi::where('materi_id',$request->id)->update([
            'nama_materi'=>$request->nama_materi,
            'deskripsi'=>$request->deskripsi

        ]);
        return back()->with('success', 'Materi berhasil diupdate');

    }

    public function deletemateri($id) {

        Materi::where('materi_id', $id)->delete();

        return back();

    }
}
