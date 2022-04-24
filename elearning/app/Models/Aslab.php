<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aslab extends Model
{
    use HasFactory;

    protected $guarded = [
        'aslab_id',
        'added_at'
    ];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
}
