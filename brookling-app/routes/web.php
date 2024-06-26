<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\QuartoController;
use App\Http\Controllers\ReservaController;


// ----------------------------- \\



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get("/",[ClienteController::class, 'showHome']);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Grupo de Cliente
    Route::post('/cadastro-cliente', [ClienteController::class,'cadCliente'])->name('envia-db-clie');
    Route::get('/cadastro-cliente',[ClienteController::class,'showformularioCadastro']);
    Route::get('/gerenciar-cliente/{id}',[ClienteController::class,'formAlterarCliente'])->name('mostrar-cliente');

    Route::get('/gerenciar-cliente', [ClienteController::class, 'gerenciarCliente'])->name('gerenciar-cliente');
    Route::put('/alterar-cliente/{id}', [ClienteController::class, 'alterClie'])->name('alterar-cliente');
    Route::delete('/apagar-cliente/{id}', [ClienteController::class, 'destroy'])->name('apagar-cliente');

    // Grupo de Funcionario
    Route::post('/cadastro-funcionario', [FuncionarioController::class,'cadFunc'])->name('envia-db-func');
    Route::get('/cadastro-funcionario',[FuncionarioController::class,'showformularioCadastroFun']);
    Route::get('/gerenciar-funcionario/{id}',[FuncionarioController::class,'formAlterarFunc'])->name('editar-funcionario');

    Route::put('/alterar-funcionario/{id}', [FuncionarioController::class, 'alterarFunc'])->name('alterar-funcionario');
    Route::get('/gerenciar-funcionario', [FuncionarioController::class, 'gerenciarFuncionario'])->name('gerenciar-funcionario');
    Route::delete('/apagar-funcionario/{id}', [FuncionarioController::class, 'destroy'])->name('apagar-funcionario');

    // Grupo de Quartos
    Route::get('/cadastro-quarto',[QuartoController::class,'showformularioCadastroQuarto']);
    Route::post('/cadastro-quarto', [QuartoController::class,'cadQuarto'])->name('envia-db-quarto');
    Route::get('/gerenciar-quarto/{id}',[QuartoController::class,'formAlterarQuarto'])->name("editar-quarto");

    Route::get('/gerenciar-quarto', [QuartoController::class, 'gerenciarQuarto'])->name('gerenciar-quarto');
    Route::delete('/apagar-quarto/{id}', [QuartoController::class, 'destroy'])->name('apagar-quarto');
    Route::put('/alterar-quarto/{id}', [QuartoController::class, 'alterarQuarto'])->name('alterar-quarto');

    // Grupo da Reserva
    Route::get('/cadastro-reserva',[ReservaController::class,'showformularioCadastroReserva']);
    Route::post('/cadastro-reserva', [ReservaController::class,'cadReserva'])->name('envia-db-reserva');
    Route::get('/gerenciar-reserva',[ReservaController::class,'gerenciarReserva']);
});

require __DIR__.'/auth.php';
