<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inicio extends Model
{
    public $timestamps = false;  
    protected $table = 'inicio';
    protected $primaryKey = 'id';


    protected $fillable = ['img1', 'img2', 'img3', 'img4'];

}
