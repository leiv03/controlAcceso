<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Puerta extends Model
{
    protected $connection='tarea';
    protected $table='puerta';
    protected $primaryKey = "id";
    public $timestamps=false;
}
