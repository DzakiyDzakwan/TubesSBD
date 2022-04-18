<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = [
        'NIM',
        'tanggal_terdaftar',
        'user_id',
        'jurusan'
    ];

    public function User()
    {
        return $this->hasOne(User::class);
    }
    public function jurusan()
    {
        return $this->belongsTo(jurusan::class);
    }
    public function jawaban()
    {
        return $this->hasOne(jawaban::class);
    }
    public function asisten_lab()
    {
        return $this->hasOne(asisten_lab::class);
    }
}
