<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'idcliente',
        'idfuncionario',
        'idquarto',
        'situacao',
        'dataSaida',
    ];
}

// $table->id();
// $table->id('idcliente');
// $table->id('idfuncionario');
// $table->id('idquarto');
// $table->enum('situacao', ['Pago', 'Pendente']);
// $table->timestamps('dataEntrada');
// $table->date('dataSaida');
