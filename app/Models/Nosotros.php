<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nosotros extends Model
{
    protected $table = 'nosotros'; 
    protected $primaryKey = 'id';
 

    protected $fillable = [
        'tituloPrincipal',
        'descripcionInicial',
        'textoDescriptivo',
        'imagen',
    ];
}
