<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Aslab;
use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\Mata_kuliah;
use App\Models\Kelas;

class AdminController extends Controller
{

    public function login() {
        return view('admin.login');
    }

    public function loginAuthenticate(Request $request) {

        $credentials = $request->validate([
            'user_name' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('webadmin')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin/user');
        }

        return back()->with('loginFail', 'Login gagal');

    }

    /* DASHBOARD */
    public function dashboard() {
        $page = 'dashboard';
        $user = User::count();
        $fakultas = Fakultas::count();
        $jurusan = Jurusan::count();
        $matkul = Mata_kuliah::count();
        $mahasiswa = Mahasiswa::count();
        $dosen = Dosen::count();

        return view('admin.dashboardadmin', [
            'page' => $page,
            'user' => $user,
            'fakultas' => $fakultas,
            'jurusan' => $jurusan,
            'matkul' => $matkul,
            'mahasiswa' => $mahasiswa,
            'dosen' => $dosen
        ]);
    }

    /* USER */
    public function user() {
        $page = 'user';

        $user = User::select('NIK', 'first_name', 'last_name', 'email', 'nomor_hp', 'agama', 'jenis_kelamin', 'status')->get();
        //$user = User::select('NIK', 'first_name', 'last_name', 'email', 'nomor_hp', 'agama', 'jenis_kelamin', 'status')->skip(0)->take(5)->get();
        $jurusan = Jurusan::get();

        return view('admin.user', [
            'page'=> $page,
            'users'=>$user,
            'jurusans'=>$jurusan
        ]);
    }

    public function userDelete($nik) {

        User::where('NIK', $nik)->delete();

        return back();

    }

    public function mahasiswaStore(Request $request) {

        Mahasiswa::create([

            'NIM'=> $request->NIM,
            'NISN'=> $request->NISN,
            'program'=>$request->program,
            'angkatan'=>$request->angkatan,
            'jurusan'=>$request->jurusan,
            'semester'=> 'I',
            'status'=>'aktif',
            'user'=>$request->NIK

        ]);

        return back();

    }

    public function dosenStore(Request $request) {

        Dosen::create([
            'NIP'=> $request->NIP,
            'NIDN'=> $request->NIDN,
            'user'=> $request->NIK,
            'status'=>'aktif'
            
        ]);

        return back();

    }

    /* MAHASISWA */
    public function mahasiswa() {
        $page = 'mahasiswa';

        $mahasiswa = Mahasiswa::join('jurusans','mahasiswas.jurusan', '=', 'jurusans.kode_jurusan')->join('users', 'mahasiswas.user', '=', 'users.NIK')->select('mahasiswas.NIM','mahasiswas.NISN' ,'mahasiswas.semester', 'mahasiswas.angkatan', 'mahasiswas.status' ,'users.first_name', 'users.last_name', 'jurusans.nama_jurusan')->get();
        $aslab = Aslab::join('mahasiswas', 'aslabs.mahasiswa', '=', 'mahasiswas.NIM')->join('users', 'mahasiswas.user', '=', 'users.NIK')->select('users.first_name', 'users.last_name', 'users.NIK', 'aslabs.aslab_id')->get();

        return view('admin.mahasiswa', [
            'page'=> $page,
            'mahasiswa'=>$mahasiswa,
            'aslabs'=>$aslab
        ]);
    }

    public function mahasiswaDelete($id) {
        Mahasiswa::where('NIM', $id)->delete();

        return back();
    }

    /* ASLAB */
    public function addAslab($nim) {
        Aslab::create([
            'tanggal_pelantikan'=>date('Y-m-d'),
            'mahasiswa'=>$nim
        ]);

        return back();
    }

    public function aslabDelete($id) {
        Aslab::where('aslab_id', $id)->delete();

        return back();
    }

    /* DOSEN */
    public function dosen() {

        $page = 'dosen';

        $dosen =  Dosen::join('users', 'dosens.user', '=', 'users.NIK')->select('dosens.NIP', 'users.first_name', 'users.last_name', 'dosens.NIDN', 'dosens.status')->get();
        /* $dosen =  Dosen::join('users', 'dosens.user', '=', 'users.NIK')->select('dosens.NIP', 'users.first_name', 'users.last_name', 'dosens.NIDN', 'dosens.status')->take(0)->skip(5)->get(); */

        return view('admin.dosen', [
            'page' => $page,
            'dosens' => $dosen,
        ]);

    }

    public function dosenDelete($id) {
        Dosen::where('NIP' , $id )->delete();

        return back();
    }

    /* FAKULTAS */
    public function faculty() {
        $page  = 'faculty';

        $dosen =  Dosen::join('users', 'dosens.user', '=', 'users.NIK')->select('dosens.NIP', 'users.first_name', 'users.last_name')->get();
        $fakultas = Fakultas::get();
        $jurusan = Jurusan::join('fakultas', 'jurusans.fakultas_id' , '=', 'fakultas.kode_fakultas')->get();
        $matakuliah = Mata_kuliah::join('jurusans', 'mata_kuliahs.jurusan', '=', 'jurusans.kode_jurusan')->get();
        $kelas = Kelas::join('mata_kuliahs', 'kelas.mata_kuliah', '=', 'mata_kuliahs.kode_mata_kuliah')->join('dosens', 'kelas.dosen', '=', 'dosens.NIP')->join('users', 'dosens.user', '=', 'users.NIK')->select('kelas.kelas_id', 'kelas.kelas', 'mata_kuliahs.nama_matkul', 'users.first_name', 'users.last_name')->get();

        return view('admin.faculty', [
            'page'=>$page,
            'fakultas'=>$fakultas,
            'jurusans'=>$jurusan,
            'matakuliah'=>$matakuliah,
            'kelas'=>$kelas,
            'dosens'=>$dosen

        ]);
    }

    public function fakultasStore(Request $request) {

        /* dd($request->all()); */

        $request->validate([
            'kode_fakultas'=>'required|min:5|unique:fakultas',
            'nama_fakultas'=>'required|unique:fakultas'
        ]);

        Fakultas::create([
            'kode_fakultas'=>$request->kode_fakultas,
            'nama_fakultas'=>$request->nama_fakultas,
            'dekan'=>$request->dekan
        ]);

        return back();

    }

    public function fakultasDelete($id) {

        Fakultas::where('kode_fakultas', $id)->delete();

        return back();

    }

    public function jurusanStore(Request $request) {

        $request->validate([
            'kode_jurusan'=>'required|min:5|unique:jurusans',
            'nama_jurusan'=>'required|unique:jurusans',
        ]);

        Jurusan::create([
            'kode_jurusan'=>$request->kode_jurusan,
            'nama_jurusan'=>$request->nama_jurusan,
            'fakultas_id'=>$request->fakultas,
            'degree'=>$request->degree
        ]);

        /* dd($request->all()); */

        return back();

    }

    public function jurusanDelete($id) {
        
        Jurusan::where('kode_jurusan', $id)->delete();

        return back();

    }

    public function matkulStore(Request $request) {

        $request->validate([
            'kode_mata_kuliah'=>"required|min:5|max:6|unique:mata_kuliahs",
            'nama_matkul'=> 'required|unique:mata_kuliahs',
            'sks'=> 'required'
        ]);

        /* dd($request->all()); */

        Mata_kuliah::create([
            'kode_mata_kuliah'=>$request->kode_mata_kuliah,
            'nama_matkul'=>$request->nama_matkul,
            'sks'=>$request->sks,
            'jurusan'=>$request->jurusan
        ]);

        return back();

    }

    public function matkulDelete($id) {
        
        Mata_kuliah::where('kode_mata_kuliah', $id)->delete();

        return back();

    }

    public function kelasStore(Request $request) {
        
        /* dd($request->all()); */

        $request->validate([
            'kelas_id'=>'required|max:6|unique:kelas',
            'kelas' => 'required|max:6'
        ]);

        Kelas::create([

            'kelas_id'=>$request->kelas_id,
            'kelas'=>$request->kelas,
            'dosen'=>$request->dosen,
            'mata_kuliah'=>$request->mata_kuliah

        ]);
        
        return back();

    }

    public function kelasDelete($id) {
        
        Kelas::where('kelas_id', $id)->delete();

        return back();

    }

}
