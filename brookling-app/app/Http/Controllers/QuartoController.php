<?php

namespace App\Http\Controllers;

use App\Models\quarto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class QuartoController extends Controller
{

    public function showFormularioCadastroQuarto(Request $request){
        return view("formularioCadastroQuarto");
    }

    public function cadQuarto(Request $request){
        $dadosValidos = $request->validate([
            'numeroQuarto' => 'integer|required',
            'tipoQuarto' => 'string|required',
            'valorDiario' => 'numeric|required'
        ]);

        quarto::create($dadosValidos);
        return Redirect::to('/');
    }
}
