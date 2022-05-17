<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    //create tugas, delete tugas, edit tugas

    public function tugas(){
        $page = 'tugas';

        return view('user.tugas', [
            'page'=> $page
        ]);

        //return view('user.tugas', compact('page'));

    }
}
