<?php

namespace App\Http\Controllers;

use App\Models\reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReservaController extends Controller
{

    public function showFormularioCadastroReserva(Request $request)
    {
        return view("formularioCadastroReserva");
    }

    public function CadReserva(Request $request)
    {
        $dadosValidos = $request->validate([
            'idcliente' => 'integer|required',
            'idfuncionario' => 'integer|required',
            'idquarto' => 'integer|required',
            'situacao' => 'enum|required',
            'dataSaida' => 'date|required'
        ]);

        reserva::create($dadosValidos);
        return Redirect::to('/');
    }
}
