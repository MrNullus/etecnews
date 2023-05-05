@extends('adm/master')
@section('title','Usuários')
@section('conteudo')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Cadastro de Usuários
                    <a href="{{route('consulta-usuario')}}" class="btn btn-success btn-sm float-end">Consulta Usuário</a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($u) ? route('atualizar-usuario') : route('gravar-usuario') }}" method="post">
                        @csrf
                        <input type="hidden" name="{{ isset($u) ? $u->id : null}}" />

                        <div class="mb-2">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ isset($u)? $u->name : null}}"> <!--if e else simplificado  -->
                            @error('name') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="mb-2">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" class="form-control" required value="{{ isset($u)? $u->email : null}}">
                        </div>
                        <div class="mb-2">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label for="nivelacesso">Acesso</label>
                            <select name="nivelacesso" id="nivelacesso" class="form-control">
                                <option value="1" @if(isset($u) && $u->nivelacesso == 1) selected @endif >Administrador</option>
                                <option value="2" @if(isset($u) && $u->nivelacesso == 2) selected @endif >Usuário</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success">Gravar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
