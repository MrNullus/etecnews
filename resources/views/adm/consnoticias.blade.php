@extends('adm/master')
@section('title','Notícias')
@section('conteudo')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    Consulta de Notícias
                    <a href="{{route('nova-noticia')}}" class="btn btn-success btn-sm float-end">Nova Notícia</a>
                </div>
               
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Data</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Categoria</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($dadosNot as $value)
                          <tr>
                            <th scope="row">{{ $value->id }}</th>
                            <td>{{ $value->titulo }}</td>
                            <td>{{ date('d/m/Y', strtotime($value->data)) }}</td>
                            <td>{{ $value->imagem }}</td>
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