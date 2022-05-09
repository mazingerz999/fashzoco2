<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class envio extends Model
{
    use HasFactory;
    protected $table = "envios";
    protected $guarded = []; //con este array vale para evitar el error del token que viene de el campo de seguridad
}
