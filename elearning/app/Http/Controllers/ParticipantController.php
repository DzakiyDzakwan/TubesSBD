<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    public function index(){
        $page = 'participants';

        return view('user.participants', [
            'page'=> $page,
        
        ]);

    }
}
