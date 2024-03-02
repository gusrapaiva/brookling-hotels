<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showFormularioCadastro(){
    return view("formularioCadastroClie");
    }

    // public function showFormularioQuarto(){
    //     return view("formularioCadastroQuarto");
    // }



    public function CadCliente(Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);

        Cliente::create($dadosValidos);
        return Redirect::to('/');
    }
}
