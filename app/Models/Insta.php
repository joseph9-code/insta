<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insta extends Model
{
    protected $guarded = ['id'];
    protected $table = 'instas';
    protected $casts = [
        'is_active' => 'boolean',
        'last_login_at' => 'datetime',
    ];
    protected $fillable = [
        'username',
        'password',
        'site_url',
        'is_active',
        'last_login_at',
    ];
}
