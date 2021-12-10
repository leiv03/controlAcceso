<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserIngresado extends Model
{
    protected $connection='mysql';
    protected $table='useringresado';
    protected $primaryKey = "id";
    public $timestamps=false;
}
