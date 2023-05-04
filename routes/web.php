<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; //colocando em uso a controller
use App\Http\Controllers\UsersController; //colocando em uso a controller
use App\Http\Controllers\CategoriasController; //colocando em uso a controller
use App\Http\Controllers\NoticiasController; //colocando em uso a controller
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
//Rotas HomeController
Route::get('/', [HomeController::class,'abrirInicio'])->name('inicio');
Route::get('/sobre', [HomeController::class,'abrirSobre'])->name('sobre');
Route::get('/contato', [HomeController::class,'abrirContato'])->name('contato');
Route::get('/adm', [HomeController::class,'abrirAdm'])->name('adm');

//Rotas UserController
Route::get('/novo-usuario', [UsersController::class,'abrirCadastro'])->name('novo-usuario');
Route::get('/consulta-usuario', [UsersController::class,'abrirConsulta'])->name('consulta-usuario');
Route::post('/gravar-usuario', [UsersController::class,'gravarUsuario'])->name('gravar-usuario');
Route::get('/excluir-usuario/{id}',[UsersController::class,'excluirUsuario'])->name('excluir-usuario');
Route::get('/editar-usuario/{id}',[UsersController::class,'editarUsuario'])->name('editar-usuario');
Route::post('/atualizar-usuario/{id}',[UsersController::class,'editarUsuario'])->name('atualizar-usuario');

//Rotas CategoriasController
Route::get('/nova-categoria', [CategoriasController::class,'abrirCadastro'])->name('nova-categoria');
Route::get('/consulta-categorias', [CategoriasController::class,'abrirConsulta'])->name('consulta-categorias');
Route::post('/gravar-categoria', [CategoriasController::class,'gravarCategoria'])->name('gravar-categoria');

//Rotas NoticiasController
Route::get('/nova-noticia', [NoticiasController::class,'abrirCadastro'])->name('nova-noticia');
Route::get('/consulta-noticias', [NoticiasController::class,'abrirConsulta'])->name('consulta-noticias');
Route::post('/gravar-noticia', [NoticiasController::class,'gravarNoticia'])->name('gravar-noticia');






//cliente
Route::get('/noticia', function () {
    return view('noticia');
})->name('noticia');
