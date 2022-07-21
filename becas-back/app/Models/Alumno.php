<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = 'alumno';
    protected $primaryKey = 'id';
    protected $keyTipe = 'integer';
    protected $fillable = ['rut','nombre','apellido','edad','direccion','correo','contrasena','ubicacion_archivos'];
}
