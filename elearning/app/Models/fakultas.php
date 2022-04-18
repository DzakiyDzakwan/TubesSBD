<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakultas extends Model
{
    use HasFactory;

    protected $guarded = [
        'kode_fakultas',
        'dekan'
    ];

    public function dosen()
    {
        return $this->hasMany(dosen::class);
    }
    public function jurusan()
    {
        return $this->hasMany(jurusan::class);
    }
}
