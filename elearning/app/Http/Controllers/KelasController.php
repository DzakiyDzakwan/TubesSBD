<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pertemuan;
use App\Models\Dosen;
use App\Models\Materi;
use App\Models\Tugas;
use App\Models\Mata_kuliah;
use App\Models\absensi;
use Illuminate\Contracts\Support\ValidatedData;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matakuliah = Mata_kuliah::join('jurusans', 'mata_kuliahs.jurusan', '=', 'jurusans.kode_jurusan')->get();

        return view('user.mataKuliah', [
            'matakuliah'=>$matakuliah,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.matakuliah.create', [
            'kelas' => Kelas::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_pertemuan' => 'required|max:255',
            'deskripsi' => 'required|max:1000',
            'tanggal_pertemuan' => 'required',
            // 'kelas' => 'required'
        ]);

        dd($validatedData);
        // Pertemuan::create($validatedData);

        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        //
    }

    public function kelas($id){
        $page = 'kelas';

        //Kelas
        $class = Kelas::where('kelas', $id)->get();

        //Pertemuan
        $pertemuan = Pertemuan::select('nama_pertemuan', 'deskripsi', 'tanggal_pertemuan')->where('kelas', $id)->get();
        
        //Materi
        

        //Tugas

        //Absensi

        return view('user.matakuliah', [
            'kelas' => $class,
            'page'=> $page,
            'pertemuan'=>$pertemuan,
        
        ]);

        // return view('user.matakuliah', compact('page'));

    }
}
