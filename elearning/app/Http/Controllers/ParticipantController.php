<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipantController extends Controller
{

    //Ambil data dari table enrollment join user

    public function index(){
        $page = 'participants';

        return view('user.participants', [
            'page'=> $page,
        
        ]);

    }
}
