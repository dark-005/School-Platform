<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'placa',
        'tipo_vehiculo',
        
    ];

    public function registros() {
        return $this->hasMany(Registro::class);
    }
}
