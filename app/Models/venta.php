<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;
    protected $table = "ventas";
    protected $guarded = []; //con este array vale para evitar el error del token que viene de el campo de seguridad

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
    public function envio()
    {
        return $this->belongsTo(envio::class);
    }
}
