<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'admins';

    protected $primaryKey = 'id_admin';

    public $timestamps = false; 

    protected $fillable = [
        'username',
        'password',
        'email',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function getAuthIdentifierName()
    {
        return 'username';
    }
}
