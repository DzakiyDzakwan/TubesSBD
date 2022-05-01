<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $guarded = [
        'user_id', 'created_at', 'updated_at'
    ];

    protected $hidden = [
        'passwrod'
    ];
}