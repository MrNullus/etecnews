@extends('adm/master')
@section('title','Categorias')
@section('conteudo')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Cadastro de Categorias
                    <a href="{{route('consulta-categorias')}}" class="btn btn-success btn-sm float-end">Consulta Categorias</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('gravar-categoria') }}" method="post">
                        @csrf
                        <div class="mb-2">
                            <label for="nomecategoria">Nome da categoria</label>
                            <input type="text" name="nomecategoria" id="nomecategoria" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success">Gravar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection