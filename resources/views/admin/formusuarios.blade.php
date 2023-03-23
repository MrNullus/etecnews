@extends('layout.admin.master')
@section('title','Usuários')
@section('conteudo')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Cadastro de Usuários
                    <a href="#" class="btn btn-success btn-sm float-end">Consulta Usuário</a>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label for="celular">Celular</label>
                            <input type="text" name="celular" id="" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="password">Senha</label>
                            <input type="password" name="password" id="" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label for="acesso">Acesso</label>
                            <select name="acesso" id="acesso" class="form-control">
                                <option value="1">Administrador</option>
                                <option value="2">Usuário</option>
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
