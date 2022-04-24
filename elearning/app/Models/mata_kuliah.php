<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mata_kuliah extends Model
{
    use HasFactory;

    protected $guarded = [
        'created_at',
        'updated_at'
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
