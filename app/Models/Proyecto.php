<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'fuente_fondos',
        'monto_planificado',
        'monto_patrocinado',
        'monto_fondos_propios',
    ];
    protected $casts = [
        'monto_planificado' => 'decimal:2',
        'monto_patrocinado' => 'decimal:2',
        'monto_fondos_propios' => 'decimal:2',
    ];
}
