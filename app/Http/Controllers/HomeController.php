<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function abrirHome() {
        return view('client.home', []);
    }

    public function abrirSobre() {
        return view('client.sobre');
    }

    public function abrirContato() {
        return view('client.contato');
    }

    public function abrirAdmin() {
        return view('admin.home');
    }
}
