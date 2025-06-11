<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EspacioParqueo extends Model
{
    protected $fillable = [
        'codigo',
        'tipo',
        'disponible'
    ];
}
