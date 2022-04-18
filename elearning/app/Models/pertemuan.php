<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pertemuan extends Model
{
    use HasFactory;

    protected $guarded = [
        'pertemuan_id',
        'kelas'
    ];

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
    public function materi()
    {
        return $this->hasOne(materi::class);
    }
    public function absensi()
    {
        return $this->hasMany(absensi::class);
    }
}
