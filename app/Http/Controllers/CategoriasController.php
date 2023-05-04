<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias; //colocar em uso a MODEL

class CategoriasController extends Controller
{
    public function abrirCadastro()
    {
        return view('adm/formcategorias');
    }

    public function abrirConsulta()
    {
        $dadosCateg = Categorias::all();
        return view('adm/conscategorias', ['dadosCateg' => $dadosCateg]);
    }

    public function gravarCategoria(Request $request)
    {
        $c = new Categorias();
        $c->nomecategoria = $request->nomecategoria;
        $c->save();
        return redirect('consulta-categorias');
    }
}
