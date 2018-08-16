<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloMoto extends Model
{
    protected $fillable = [
        'id', 'nombre', 'precio', 'prima', 'requiere_prima', 'url_imagen', 'creado_en', 'actualizado_en', 'actualizado_en'];
}
