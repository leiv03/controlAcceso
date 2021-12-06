<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $connection='controldeacceso';
    protected $table='usuario';
    protected $primaryKey = "ci";
    public $timestamps=false;
}