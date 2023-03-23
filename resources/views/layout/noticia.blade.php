@extends('master')
@section('title','Início')
@section('conteudo')
<div class="container-fluid">

    <div class="row mt-2">

        <div class="col-sm-8 mx-auto">
            <div class="border p-3 mb-2 rounded">
                <h3>Título da Notícia 1</h3>
                <p class="card-text"><small class="text-muted">Data: 16/03/2023</small></p>
                <img src="{{asset('images/imagem3.webp')}}" class="card-img-top img-thumbnail" alt="...">
                <p class="mt-2">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi quod quia facere error enim dicta veritatis excepturi odit id minima, ducimus tempora ullam. Deleniti amet voluptatem fuga eveniet quis modi?
                    <br><br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga impedit placeat unde adipisci, laborum facere perferendis reprehenderit veritatis rerum non, iure in recusandae sint asperiores repudiandae? Incidunt id labore vero.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, optio perferendis ipsam soluta expedita ipsum rem recusandae quod. Perspiciatis dolores deleniti soluta? Aliquid rerum ipsam optio eos deleniti consequatur nostrum.
                </p>
                <a href="{{route('inicio')}}" class="btn btn-success"><i class="fa fa-arrow-left"></i> Voltar</a>
            </div>
        </div>

    </div>

</div>
@endsection