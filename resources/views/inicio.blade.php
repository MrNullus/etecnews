@extends('master')
@section('title','Início')
@section('conteudo')
<div class="container-fluid">
    <div class="row mt-2">
        <div class="col-sm-12">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link border" aria-current="page" href="#">Todas <i class="fa fa-check"></i></a>
                </li>
                <li class="nav-item border">
                  <a class="nav-link" href="#">Esportes</a>
                </li>
                <li class="nav-item border">
                  <a class="nav-link" href="#">Música</a>
                </li>
                <li class="nav-item border">
                    <a class="nav-link" href="#">Tecnologia</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-sm-6 mx-auto">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Pesquisar...">
            </div>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-sm-3 mb-2">
            <a href="{{route('noticia')}}" class="list-group-item list-group-item-action">
            <div class="card">
                <img src="{{asset('images/imagem3.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Notícia 1</h5>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio quidem vel maxime minima omnis excepturi perspiciatis expedita eaque magnam ...</p>
                  <p class="card-text"><small class="text-muted">Data: 16/03/2023</small></p>
                </div>
            </div>
            </a>
        </div>

        <div class="col-sm-3 mb-2">
            <a href="{{route('noticia')}}" class="list-group-item list-group-item-action">
            <div class="card">
                <img src="{{asset('images/imagem2.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Notícia 2</h5>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio quidem vel maxime minima omnis excepturi perspiciatis expedita eaque magnam ...</p>
                  <p class="card-text"><small class="text-muted">Data: 16/03/2023</small></p>
                </div>
            </div>
            </a>
        </div>

        <div class="col-sm-3 mb-2">
            <a href="{{route('noticia')}}" class="list-group-item list-group-item-action">
            <div class="card">
                <img src="{{asset('images/imagem3.webp')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Notícia 3</h5>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio quidem vel maxime minima omnis excepturi perspiciatis expedita eaque magnam ...</p>
                  <p class="card-text"><small class="text-muted">Data: 16/03/2023</small></p>
                </div>
            </div>
            </a>
        </div>

        <div class="col-sm-3 mb-2">
            <a href="{{route('noticia')}}" class="list-group-item list-group-item-action">
            <div class="card">
                <img src="{{asset('images/imagem2.webp')}}" class="img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Notícia 4</h5>
                  <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio quidem vel maxime minima omnis excepturi perspiciatis expedita eaque magnam ...</p>
                  <p class="card-text"><small class="text-muted">Data: 16/03/2023</small></p>
                </div>
            </div>
            </a>
        </div>
        
    </div>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link">Anterior</a>
          </li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Próxima</a>
          </li>
        </ul>
    </nav>

</div>
@endsection