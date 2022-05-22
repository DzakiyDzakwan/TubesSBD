<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;


class TugasController extends Controller
{
    //create tugas, delete tugas, edit tugas

    public function tugas(){
        $page = 'tugas';
        $tugas = Tugas::select('deadline_tugas', 'nama_tugas', 'deskripsi')->get();

        return view('user.tugas', [
            'page'=> $page,
            'tugas'=>$tugas
        ]);

        //return view('user.tugas', compact('page'));

    }
}
