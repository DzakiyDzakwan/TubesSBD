<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use App\Models\User;
use App\Models\Aslab;
class ParticipantController extends Controller
{

    //Ambil data dari table enrollment join user

    public function index($id){
        $page = 'participants';

        $nik = auth()->user()->NIK;

        /* $participants = Enrollment::join('kelas','enrollments.kelas','=','kelas.kelas_id')
        ->join('users','enrollments.user','=','users.nik')
        ->select('users.first_name','users.last_name','kelas.kelas_id','enrollments.role')
        // ->where('kelas.kelas_id', $id)
        ->get(); */

        $participants = Enrollment::join('users', 'enrollments.user', '=', 'users.NIK')->where('enrollments.kelas', $id)->select('users.first_name', 'users.last_name', 'enrollments.role')->get();

        $dosen = User::select('users.first_name', 'users.last_name')->where('NIK', $nik)->get()[0];

        /* dd($participants); */

        return view('user.participants', [
            'page'=> $page,
            'participants'=>$participants,
            'dosen'=>$dosen
        
        ]);

    }
}
