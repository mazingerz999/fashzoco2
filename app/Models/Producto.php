<?php

namespace App\Models;

use App\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = "productos";
    protected $guarded = []; //con este array vale para evitar el error del token que viene de el campo de seguridad

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function envio()
    {
        return $this->belongsTo(envio::class);
    }

    // public function getRouteKeyName() {
    //     return 'slug';
    // }
}
