<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function register(){

        return view('user.register', [
            'title' => "Register"
        ]);

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIK' => 'required|min:16|max:16',
            'email' => 'required|email:dns|unique:user',
            'nomor_hp' => 'required|min:8|max:255|unique:user',
            'first_name' => 'required|min:3|max:200',
            'last_name' => 'required|min:3|max:200',
            'agama' => 'required|min:5|max:255',
            'password' => 'required|min:5|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
    }
}
