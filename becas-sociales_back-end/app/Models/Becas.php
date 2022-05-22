<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Becas extends Model
{
    use HasFactory;

    protected $table = 'becas';
    protected $fillable = ['nombre','descirpcion','can_post'];
}
