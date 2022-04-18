<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'NIP',
        'added_at',
        'user_id'
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


