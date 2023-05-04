@extends('adm/master')
@section('title','Categorias')
@section('conteudo')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    Consulta de Categorias
                    <a href="{{route('nova-categoria')}}" class="btn btn-success btn-sm float-end">Nova Categoria</a>
                </div>
               
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Categoria</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($dadosCateg as $value)
                          <tr>
                            <th scope="row">{{ $value->id }}</th>
                            <td>{{ $value->nomecategoria }}</td>
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