<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection='controlDeAcceso';
    protected $table='user';
    protected $primaryKey = "ci";
    public $timestamps=false;
}