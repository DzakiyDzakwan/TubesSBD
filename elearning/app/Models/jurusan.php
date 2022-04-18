<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class jurusan extends Model
{
    use HasFactory;

    protected $guarded = [
        'kode_jurusan',
        'fakultas',
        'created_at'
    ];

    public function fakultas()
    {
        return $this->belongsTo(fakultas::class);
    }
    public function Mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
    public function mata_kuliah()
    {
        return $this->hasMany(mata_kuliah::class);
    }
}
