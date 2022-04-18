<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $guarded = [
        'kelas_id',
        'dosen',
        'mata_kuliah'
    ];

    public function enrollment()
    {
        return $this->belongsToMany(enrollment::class);
    }
    public function dosen()
    {
        return $this->belongsToMany(dosen::class);
    }
    public function mata_kuliah()
    {
        return $this->belongsToMany(mata_kuliah::class);
    }
    public function pertemuan()
    {
        return $this->hasMany(pertemuan::class);
    }
}
