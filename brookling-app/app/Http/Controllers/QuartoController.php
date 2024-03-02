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

    public function CadQuarto(Request $request){
        $dadosValidos = $request->validate([
            'numero' => 'integer|required',
            'tipo' => 'string|required',
            'valor' => 'double|required'
        ]);

        quarto::create($dadosValidos);
        return Redirect::to('/');
    }
}
