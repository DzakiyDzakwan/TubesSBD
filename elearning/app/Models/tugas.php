<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    use HasFactory;

    protected $guarded = [
        'tugas_id',
        'materi'
    ];

    public function jawaban()
    {
        return $this->hasMany(jawaban::class);
    }
    public function  materi()
    {
        return $this->hasOne(materi::class);
    }
}
