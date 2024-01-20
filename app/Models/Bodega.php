<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'ubicacion',
        'telefono',
        'direccion',
        'email',
        'descripcion',
        'contacto_persona',
        'anyo_fundacion',
        'disp_restaurante',
        'disp_hotel'
    ];

    public function vinos()
    {
        return $this->hasMany(Vino::class);
    }
}
