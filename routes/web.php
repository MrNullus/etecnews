<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('site.home');

Route::get('/contact', function () {
    return view('contato');
})->name('site.contato');

Route::get('/about', function () {
    return view('sobre');
})->name('site.sobre');


Route::prefix('/categories')->group(function(){

    Route::get('/novidades', function () {
        return view('categorias.novidades');
    })->name('cat.novidades');

    Route::get('/projetos', function () {
        return view('categorias.projetos');
    })->name('cat.projetos');

    Route::get('/eventos', function () {
        return view('categorias.eventos');
    })->name('cat.eventos');

});
