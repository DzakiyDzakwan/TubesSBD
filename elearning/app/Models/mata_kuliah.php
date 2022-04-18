<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mata_kuliah extends Model
{
    use HasFactory;

    protected $guarded = [
        'kode_mata_kuliah',
        'jurusan'
    ];

    public function kelas()
    {
        return $this->belongsToMany(kelas::class);
    }
    public function jurusan()
    {
        return $this->belongsTo(jurusan::class);
    }
    public function dosen()
    {
        return $this->hasManyThrough(dosen::class, kelas::class);
    }
}
