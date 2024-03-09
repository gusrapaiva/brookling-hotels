<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;


// ----------------------------- \\
Route::get("/",[ClienteController::class, 'showHome']);

// Grupo de Cliente
Route::post('/cadastro-cliente', [ClienteController::class,'cadCliente'])->name('envia-db-clie');
Route::get('/cadastro-cliente',[ClienteController::class,'showformularioCadastro']);
Route::get('/gerenciar-cliente',[ClienteController::class,'gerenciarCliente']);

// Grupo de Funcionario
Route::get('/cadastro-funcionario',[FuncionarioController::class,'showformularioCadastroFun']);
Route::post('/cadastro-funcionario', [FuncionarioController::class,'cadFunc'])->name('envia-db-func');
Route::get('/gerenciar-funcionario',[FuncionarioController::class,'gerenciarFuncionario']);

// Grupo de Quartos
Route::get('/cadastro-quarto',[QuartoController::class,'showformularioCadastroQuarto']);
Route::post('/cadastro-quarto', [QuartoController::class,'cadQuarto'])->name('envia-db-quarto');
Route::get('/gerenciar-quarto',[QuartoController::class,'gerenciarQuarto']);

// Grupo da Reserva
Route::get('/cadastro-reserva',[ReservaController::class,'showformularioCadastroReserva']);
Route::post('/cadastro-reserva', [ReservaController::class,'cadReserva'])->name('envia-db-reserva');
Route::get('/gerenciar-reserva',[ReservaController::class,'gerenciarReserva']);

