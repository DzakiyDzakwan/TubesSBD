<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Tugas;
use Illuminate\Auth\Events\Validated;

class JawabanController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->file('file'));


        $validatedData = $request->validate([
            'jawaban' => 'required|max:255',
            'file' => 'mimes:csv,txt,xlx,xls,pdf|max:10240',
        ]);

        if($request->hasFile('file')){
            $fileName = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('jawaban',   $fileName, 'public');
            $validatedData['file'] = '/storage/' . $path;
        }

        $validatedData['terkumpul'] = $request->terkumpul;
        $validatedData['tugas'] = $request->tugas;
        $validatedData['mahasiswa'] = $request->NIM;

        // dd($validatedData);
        Jawaban::create($validatedData);

        return back()->with('success', 'Jawaban Telah Tersubmit Bro');
    }   
}
