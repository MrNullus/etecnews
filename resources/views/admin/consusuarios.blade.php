@extends('layout.admin.master')
@section('title','Usuários')
@section('content')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    Consulta de Usuários
                    <a href="{{ route('admin.usuarios.register') }}" class="btn btn-success btn-sm float-end">Novo Usuário</a>
                </div>

                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Nível de Acesso</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($dadosUser as $user)
                          <tr>
                            <th scope="row">
                                {{ $user->id }}
                            </th>
                            <td>
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                {{ $user->level }}
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
