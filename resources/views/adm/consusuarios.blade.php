@extends('adm/master')
@section('title','Usuários')
@section('conteudo')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-10 mx-auto">

            @if(session('msg'))
              <div class="alert alert-warning">
                {{ session('msg') }}
              </div>
            @endif

            <div class="card">
                <div class="card-header">
                    Consulta de Usuários
                    <a href="{{route('novo-usuario')}}" class="btn btn-success btn-sm float-end">Novo Usuário</a>
                </div>

  <div class="card-body">

      <table class="table table-striped table-bordered" id="tabela">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">E-mail</th>
              <th scope="col">Nível de Acesso</th>
              <th scope="col">Ação</th>
            </tr>
          </thead>
          <tbody>
          @foreach($dadosUsers as $value)
            <tr>
              <th scope="row">{{ $value->id }}</th>
              <td>{{ $value->name }}</td>
              <td>{{ $value->email }}</td>
              <td>{{ $value->nivelacesso == 1 ? 'Administrador' : 'Usuário' }}</td>
              <td>
              <a href="{{route('editar-usuario',$value->id)}}" class="btn btn-warning btn-sm">
                <i class="fa-solid fa-user-pen"></i>
              </a>
              <a href="{{route('excluir-usuario',$value->id)}}" onclick="return confirm('Deseja relamente excluir?')" class="btn btn-danger btn-sm">
                <i class="fa-solid fa-trash"></i>
              </a>

              </tr>
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
