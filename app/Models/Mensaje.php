<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;
    protected $fillable = [
        'asunto',
        'contenido',
        "user_id_envio",
        "user_id_recibido",


    ];


}
