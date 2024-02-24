<?php

namespace App\Http\Controllers;

use App\Models\funcionarios;
use App\Http\Requests\StorefuncionariosRequest;
use App\Http\Requests\UpdatefuncionariosRequest;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function showFormularioCadastroFun(Request $request){
        return view("formularioCadastroFun");
        }
}
