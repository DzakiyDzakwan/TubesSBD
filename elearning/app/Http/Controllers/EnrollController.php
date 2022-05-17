<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnrollController extends Controller
{
    
    public function sitehome(){
        $page = 'sitehome';

        $fakultas = Fakultas::all();
        // return view('user.sitehome', compact('fakultas'));

        // $fakultas = Fakultas::join('jurusans','')

        $jurusans = Jurusan::join('fakultas','jurusans.fakultas_id','=','fakultas.kode_fakultas')->select('jurusans.kode_jurusan','jurusans.nama_jurusan','jurusans.fakultas_id','fakultas.kode_fakultas','fakultas.nama_fakultas')->get();

        return view('user.sitehome', [
            'page'=> $page,
            'jurusans'=>$jurusans,
            'fakultas'=>$fakultas
        ]);

        // return view('user.sitehome', compact('page'));

    }

    public function jurusan( $id){
        $page = 'pilihanjurusan';

        // $jurusans = Jurusan::all();
        // return view('user.pilihanjurusan', compact('jurusans'));

        $jurusans = Jurusan::join('fakultas','jurusans.fakultas_id','=','fakultas.kode_fakultas')->select('jurusans.kode_jurusan','jurusans.nama_jurusan','jurusans.fakultas_id','fakultas.kode_fakultas','fakultas.nama_fakultas')->where('fakultas.kode_fakultas', $id )->get();

        return view('user.pilihanjurusan', [
            'page'=> $page,
            'jurusans'=>$jurusans
        
        ]);
        
        //return view('user.pilihanjurusan', compact('page'));

    }


    public function enrollmatkul(){

        //Ambil kelas bedasarkan id jurusan yang dipilih

        $page = 'enrollmatkul';

        return view('user.enrollmatkul', [
            'page'=> $page,
        ]);

        //return view('user.enrollmatkul', compact('page'));

    }

    public function enroll() {

        //Create data tabel enrollment kelas

    }


}
