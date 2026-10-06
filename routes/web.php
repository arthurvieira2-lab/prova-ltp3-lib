<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\LivroController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rota para a página inicial
Route::get('/', function () {
    return view('welcome');
});

// Rotas do CRUD de Autores
Route::resource('autores', AutorController::class)
    ->parameters(['autores' => 'autor'])
    ->except(['show']);

// Rotas do CRUD de Livros
Route::resource('livros', LivroController::class)
    ->except(['show']);