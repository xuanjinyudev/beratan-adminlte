<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // Nama tabel di database
    protected $table = 'admins';
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];
}
