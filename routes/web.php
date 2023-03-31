<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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


// Rotas Controller
Route::get(
    '/',
    [HomeController::class, 'abrirHome']
)->name('site.home');

Route::get(
    '/contact',
    [HomeController::class, 'abrirContato']
)->name('site.contato');

Route::get(
    '/about',
    [HomeController::class, 'abrirSobre']
)->name('site.sobre');

Route::get(
    '/news/{:id}',
    [HomeController::class, 'abrirNoticia']
)->name('site.noticia');

Route::get(
    '/admin',
    [HomeController::class, 'abrirAdmin']
)->name('admin.home');


// Rotas UserController
Route::prefix('/admin')->group(function(){
    // Usuarios
    Route::get(
        '/usuarios',
        [UserController::class, 'abrirUsuarios']
    )->name('admin.usuarios');

    Route::get(
        '/usuarios/register',
        [UserController::class, 'abrirCadastro']
    )->name('admin.usuarios.register');

    Route::post(
        '/usuarios/register',
        [UserController::class, 'cadastrar']
    )->name('gravar-usuario');


    // Categorias
    Route::get('/categorias', function () {
        return view('admin.formusuarios');
    })->name('admin.categorias');


    // Noticiais
    Route::get('/noticias', function () {
        return view('admin.noticias');
    })->name('admin.noticias');
});



Route::prefix('/categories')->group(function(){
    Route::get('/novidades', function () {
        return view('client.categorias.novidades');
    })->name('cat.novidades');

    Route::get('/projetos', function () {
        return view('client.categorias.projetos');
    })->name('cat.projetos');

    Route::get('/eventos', function () {
        return view('client.categorias.eventos');
    })->name('cat.eventos');
});
