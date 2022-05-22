<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;


class ParticipantController extends Controller
{

    //Ambil data dari table enrollment join user

    public function index(){
        $page = 'participants';

        $participants = Enrollment::join('kelas','enrollments.kelas','=','kelas.kelas_id')
        ->join('users','enrollments.user','=','users.id')
        ->select('users.first_name','users.last_name','kelas.kelas_id')
        // ->where('kelas.kelas_id', $id)
        ->get();

        return view('user.participants', [
            'page'=> $page,
            'participants'=>$participants
        
        ]);

    }
}
