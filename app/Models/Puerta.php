<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puerta extends Model
{
    protected $connection='controldeacceso';
    protected $table='puerta';
    protected $primaryKey = "codigoPuerta";
    public $timestamps=false;
}
