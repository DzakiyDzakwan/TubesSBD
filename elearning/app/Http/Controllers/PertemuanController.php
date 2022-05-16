<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertemuanController extends Controller
{

    //Create Pertemuan, Delete Pertemuan

    public function pertemuanStore(request $request){
        
        $request->validate([
            'nama_pertemuan'=>'required',
        
        ]);


        Pertemuan::create([
            'nama_pertemuan'=>$request->nama_pertemuan,
            'deskripsi'=>$request->deskripsi,
            'tanggal_pertemuan'=>$request->tanggal_pertemuan,
            'kelas'=>$request->kelas
        ]);
        return back();

    }

}
