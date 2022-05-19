<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertemuan;


class PertemuanController extends Controller
{

    //Create Pertemuan, Delete Pertemuan
    

    public function pertemuanStore(request $request){
        
        $request->validate([
            'nama_pertemuan'=>'required',
        
        ]);


        Pertemuan::create([
            'pertemuan_id'=>$request->pertemuan_id,
            'nama_pertemuan'=>$request->nama_pertemuan,
            'deskripsi'=>$request->deskripsi,
            'tanggal_pertemuan'=>$request->tanggal_pertemuan,
            'kelas'=>$request->kelas
        ]);
        return back();

    }

    // public function pertemuan(){
    //     $pertemuans = pertemuan::join('kelas','pertemuans.kelas','=','kelas.kelas_id')->select('pertemuans.nama_pertemuan','pertemuans.deskripsi','pertemuans.tanggal_pertemuan')->get();
    // }

}
