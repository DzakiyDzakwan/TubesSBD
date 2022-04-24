<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = [
        'created_at',
        'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
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
