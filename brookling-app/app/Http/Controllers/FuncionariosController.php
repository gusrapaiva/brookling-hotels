<?php

namespace App\Http\Controllers;

use App\Models\funcionarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FuncionariosController extends Controller
{
    public function showFormularioCadastroFun(Request $request){
        return view("formularioCadastroFun");
        }

    public function cadFunc(Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);

        funcionarios::create($dadosValidos);
        return Redirect::to('/');
    }
}