<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;


// ----------------------------- \\

Route::get("/",[ClienteController::class, 'showHome']);
Route::get('/cadastro-cliente',[ClienteController::class,'showformularioCadastro']);
Route::get('/cadastro-funcionario',[FuncionarioController::class,'showformularioCadastroFun']);
Route::get('/cadastro-quarto',[QuartoController::class,'showformularioCadastroQuarto']);
Route::get('/cadastro-reserva',[ReservaController::class,'showformularioCadastroReserva']);




Route::post('/cadastro-cliente', [ClienteController::class,'cadCliente'])->name('envia-db-clie');
Route::post('/cadastro-funcionario', [FuncionarioController::class,'cadFunc'])->name('envia-db-func');
Route::post('/cadastro-quarto', [QuartoController::class,'cadQuarto'])->name('envia-db-quarto');
Route::post('/cadastro-reserva', [ReservaController::class,'cadReserva'])->name('envia-db-reserva');