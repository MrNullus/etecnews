<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class HomeController extends Controller
{
    public function abrirHome() {
        return view('client.home');
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

    public function abrirNoticia($id) {
        $noticia = Noticia::findOrFail($id);

        return view('layout.noticia', [
            'noticia' => $noticia
        ]);
    }
}
