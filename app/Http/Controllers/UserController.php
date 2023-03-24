<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function abrirCadastro() {
        return view('admin.formusuarios');
    }

    public function abrirConsulta() {
        return view('admin.consusuarios');
    }
}
