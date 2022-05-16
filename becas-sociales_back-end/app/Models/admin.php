<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'administrador';
    protected $primaryKey = 'id';
    protected $keyTipe = 'integer';
    protected $fillable = ['rut','nombre','apellido','correo','contrasena'];
}
