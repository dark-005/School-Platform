<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    protected $fillable = [
        'tipo_vehiculo',
        'valor_hora'
    ];
}
