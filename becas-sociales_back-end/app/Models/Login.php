<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    use HasFactory,Notifiable;
    protected $table = 'correo_electronico';
    protected $fillable = [
        'email', 'passcode','active'
    ];
    protected $hidden = [
        'passcode', 'remember_token',
    ];
    public function getAuthPassword()
    {
      return $this->passcode;
    }
}
