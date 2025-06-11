<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    protected $fillable = [
        'hora_entrada',
        'hora_salida',
        'total_a_pagar'
    ];
    public function vehiculo(){
        return $this->belongsTo(Vehiculo::class);
    }
    public function espacio(){
        return $this->belongsTo(EspacioParqueo::class);
    }
}
