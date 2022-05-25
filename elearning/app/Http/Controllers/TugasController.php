<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use App\Models\Tugas;


class TugasController extends Controller
{
    //create tugas, delete tugas, edit tugas

    public function tugas(){
        $page = 'tugas';
        $tugas = Tugas::select('tugas_id','deadline_tugas', 'nama_tugas', 'deskripsi')->get();
        $mahasiswa = Mahasiswa::select('NIM')->get();
        $jawaban = Jawaban::select('terkumpul','created_at')->get();

        return view('user.tugas', [
            'page'=> $page,
            'tugas'=>$tugas,
            'mahasiswa'=>$mahasiswa,
            'jawaban'=>$jawaban
        ]);

        //return view('user.tugas', compact('page'));

    }

    public function store(Request $request) {

        /* dd($request->all()); */

        Tugas::create([

            'nama_tugas'=>$request->nama_tugas,
            'deskripsi'=>$request->deskripsi,
            'deadline_tugas'=>$request->deadline,
            'pertemuan'=>$request->pertemuan

        ]);

        return back()->with('success', 'Tugas Berhasil Dibuat');

    }
}
