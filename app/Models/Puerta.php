<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puerta extends Model
{
    protected $connection='controlDeAcceso';
    protected $table='puerta';
    protected $primaryKey = "id";
    public $timestamps=false;
}
