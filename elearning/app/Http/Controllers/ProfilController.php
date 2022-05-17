<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;

class ProfilController extends Controller
{
    
    public function profile(){
        $page = 'profile';

        $nik = auth()->user()->NIK;

        //Pembatasan User dan Dosen
        if(auth()->user()->status === "mahasiswa") {

            $profil = Mahasiswa::join('users','mahasiswas.user','=','users.NIK')->select('mahasiswas.NIM','users.NIK','users.first_name','users.last_name','users.email','users.nomor_hp','users.jenis_kelamin','users.agama','users.kewarganegaraan','users.alamat','users.tgl_lahir')->where('users.NIK', $nik)->get();

        } elseif(auth()->user()->status === "dosen") {

            $profil = Dosen::join('users','dosens.user','=','users.NIK')->select('dosens.NIP','users.NIK','users.first_name','users.last_name','users.email','users.nomor_hp','users.jenis_kelamin','users.agama','users.kewarganegaraan','users.alamat','users.tgl_lahir')->where('users.NIK', $nik)->get();

        }


        

        return view('user.profile', [
            'page'=> $page,
            'profil'=>$profil[0]
            //'mahasiswa'=>$mahasiswa[0],
            //'dosen'=>$dosen[0],
            //'enrollmatkul'=>$enrollmatkul

        ]);

        // return view('user.profile', compact('users'));

    }

    public function editprofil($id){
        $page = 'editprofil';

         //Pembatasan User dan Dosen
         if(auth()->user()->status === "mahasiswa") {

            //show data user

        } elseif(auth()->user()->status === "dosen") {

            //show data dosen

        }

       /*  //yg ini jalan
        $mahasiswa = Mahasiswa::join('users','mahasiswas.user','=','users.NIK')->join('jurusans','mahasiswas.jurusan','=','jurusans.kode_jurusan')->select('mahasiswas.NIM','mahasiswas.jurusan','users.NIK','users.first_name','users.last_name','users.email','users.nomor_hp','users.jenis_kelamin','users.agama','users.kewarganegaraan','users.alamat','users.tgl_lahir','users.password','jurusans.nama_jurusan')
        // ->where('NIK',$id)
        // ->first();
        ->get(); */

        //blm sukses
        //$mahasiswa = User::find($id);

        

        // $mahasiswa = User::where('NIK')->first();

        //$data= Mahasiswa::find('NIM', $id);
        //dd($data);


        //sidebar user
        //$enrollmatkul = Enrollment::join('kelas','enrollments.kelas','=','kelas.kelas_id')->join('mata_kuliahs','kelas.mata_kuliah','=','mata_kuliahs.kode_mata_kuliah')->select('enrollments.user','enrollments.kelas','mata_kuliahs.kode_mata_kuliah','mata_kuliahs.nama_matkul')->get();
    

        return view('user.editprofil', [
            'page'=> $page,
            //'mahasiswa'=>$mahasiswa[0],
            //'enrollmatkul'=> $enrollmatkul
        
        ]);

        //return view('user.editprofil', compact('page'));

    }

    public function updateprofile(Request $request){

        //Pembatasan User dan Dosen
        if(auth()->user()->status === "mahasiswa") {

            //update data user

        } elseif(auth()->user()->status === "dosen") {

            //update data dosen

        }

        DB::table('users')->where('NIK', $request->id)->update([

            'NIK' => $request->NIK,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'tgl_lahir' => $request->tgl_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'kewarganegaraan' => $request->kewarganegaraan,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'email' => $request->email,
            'password' => $request->password

        ]);

    }

}
