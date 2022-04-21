<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dosen extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'NIP',
        'added_at'
    ];

    public function User()
    {
        return $this->hasOne(User::class);
    }
    public function fakultas()
    {
        return $this->belongsTo(fakultas::class);
    }
    public function kelas()
    {
        return $this->belongsToMany(kelas::class);
    }
    public function mata_kuliah()
    {
        return $this->hasManyThrough(mata_kuliah::class, kelas::class);
    }
}


