<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //colocar em uso a MODEL

class UsersController extends Controller
{
    public function abrirCadastro()
    {
        return view('adm/formusuarios');
    }

    public function abrirConsulta()
    {
        $dadosUsers = User::all();
        return view('adm/consusuarios', ['dadosUsers' => $dadosUsers]);
    }

    public function gravarUsuario(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|max:100'
            ]
        );

        $u = new User();
        $u->name        = $request->name;
        $u->email       = $request->email;
        $u->password    = $request->password;
        $u->nivelacesso = $request->nivelacesso;
        $u->save();
        return redirect('consulta-usuario')->with('msg','Dados gravados com sucesso!');
    }

    public function excluirUsuario($id)
    {
        $u = User::findOrFail($id); //carregar usuario chamado e carregar em delete
        $u->delete();
        return back();
    }

    public function editarUsuario($id)
    {
         $u = User::findOrFail($id);
         return view('adm/formusuarios',['u' => $u]);
    }

    public function atualizarUsuario(Request $request) {
        $u = new User();
        $u->name        = $request->name;
        $u->email       = $request->email;
        $u->password    = $request->password;
        $u->nivelacesso = $request->nivelacesso;

        $u->update();
        return redirect('consulta-usuario')->with('msg', 'Dados atualizados com sucesso!');
    }



}


