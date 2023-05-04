<?php

namespace App\Http\Controllers;
use App\Models\Noticias; //colocar em uso a MODEL
use App\Models\Categorias; //colocar em uso a MODEL

use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function abrirCadastro()
    {
        $dadosCateg = Categorias::all();
        return view('adm/formnoticias', ['dadosCateg' => $dadosCateg]);
    }

    public function abrirConsulta()
    {
        $dadosNot = Noticias::
        join('categorias','categorias.id','noticias.idcategoria')
        ->get();
        return view('adm/consnoticias', ['dadosNot' => $dadosNot]);
    }

    public function gravarNoticia(Request $request)
    {
        $not = new Noticias();
        $not->titulo        = $request->titulo;
        $not->data          = $request->data;
        $not->texto         = $request->texto;
        $not->imagem        = $request->imagem;
        $not->idcategoria   = $request->idcategoria;
        $not->save();
        return redirect('consulta-noticias');
    }
}
