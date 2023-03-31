<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function abrirCadastro()
    {
        return view('admin.formusuarios');
    }

    public function cadastrar(Request $req)
    {
        $user = new User([
            'name'     => $req->name,
            'email'    => $req->email,
            'password' => $req->password,
            'level'    => $req->level
        ]);

        $user->save();

        return redirect('/admin/usuarios')
            ->with('message', 'Cadastrado com sucesso!');
    }

    public function abrirUsuarios()
    {
        $dadosUser = User::all();

        return view('admin.consusuarios', [
            'dadosUser' => $dadosUser,
        ]);
    }
}
