<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionariosController;
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


// Route::get('/layout', function () {
//     return view('layout');
// });

// Route::get('/home', function () {
//     return view('home');
// });

Route::get("/",[ClienteController::class, 'showHome']);
Route::get('/cadastro-cliente',[ClienteController::class,'showformularioCadastro']);
Route::get('/cadastro-funcionario',[FuncionariosController::class,'showformularioCadastroFun']);
Route::post('/cadastro-cliente', [ClienteController::class,'cadCliente'])->name('envia-db-clie');