<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserIngresado extends Model
{
    protected $connection='controlDeAcceso';
    protected $table='userIngresado';
    protected $primaryKey = "id";
    public $timestamps=false;
}
