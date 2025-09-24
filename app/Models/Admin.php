<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    // Nama tabel di database
    protected $table = 'admins';

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    // Hide password when serializing
    protected $hidden = [
        'password',
    ];
}
