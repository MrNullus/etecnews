@extends('adm/master')
@section('title','Noticias')
@section('conteudo')

<div class="container">
    <div class="row mt-3">
        <div class="col-sm-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    Cadastro de Notícias
                    <a href="{{route('consulta-noticias')}}" class="btn btn-success btn-sm float-end">Consulta Notícias</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('gravar-noticia') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" id="titulo" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label for="titulo">Data</label>
                            <input type="date" name="data" id="data" class="form-control" required>
                        </div>
                        <div class="mb-2">
                            <label for="imagem">Imagem</label>
                            <input type="file" name="imagem" id="imagem" class="form-control" required>
                        </div>


                        <div class="mb-2">
                            <label for="idcategoria">Categoria</label>

                            <select name="idcategoria" id="idcategoria" class="form-control">
                                @foreach($dadosCateg as $value)
                                    <option value="{{$value->id}}">{{$value->nomecategoria}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="texto">Texto</label>
                            <textarea name="texto" id="texto" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Gravar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
