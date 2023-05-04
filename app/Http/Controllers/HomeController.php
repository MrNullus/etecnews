<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function abrirInicio()
    {
        return view('inicio');
    }

    public function abrirContato()
    {
        return view('contato');
    }

    public function abrirSobre()
    {
        return view('sobre');
    }

    public function abrirAdm()
    {
        return view('adm/home');
    }
}
