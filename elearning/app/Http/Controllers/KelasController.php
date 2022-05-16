<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function matakuliah(){
        $page = 'matakuliah';

        $pertemuan = Kelas::select('kelas')->get();
        
        return view('user.matakuliah', [
            'page'=> $page,
            'pertemuan'=>$pertemuan,
        
        ]);

        // return view('user.matakuliah', compact('page'));

    }
}
