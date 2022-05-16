<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    //create absensi, store absensi, delete absensi, edit absensi

    public function absen(){
        $page = 'absen';

        return view('user.absen', [
            'page'=> $page
        
        ]);

        //return view('user.absen', compact('page'));

    }

    public function absenStore(Request $request){
        // $page = 'submitabsen';

        Absensi::create([
            'status'=>$status
        ]);

        return back();

    }
}
