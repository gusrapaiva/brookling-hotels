<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showFormularioCadastro(Request $request){
    return view("formularioCadastroClie");
    }

    public function showFormularioCadastroFun(Request $request){
    return view("formularioCadastroFun");
    }
}