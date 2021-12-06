<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puerta extends Model
{
    protected $connection='mysql';
    protected $table='puerta';
    protected $primaryKey = "codigoPuerta";
    public $timestamps=false;
}
