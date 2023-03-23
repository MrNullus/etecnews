@extends('layout.client.master')

@section('title', 'Eventos')

@section('content')
<main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron eventos py-5 my-5 mb-5" style="text-align: center; height: 60vh;">
  <div class="container p-5 shadow" style="display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 1.2rem">
    <h1 class="display-3 mb-5">Participe de nossos eventos!</h1>
  </div>
</div>

<div class="container" style="margin-top: 6rem;">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2>EtecNews Talks</h2>
      <p>
      23 de abril de 2023, Rua Tupinanbas, 100 - Um evento de palestras e debates com especialistas em comunicação, marketing e jornalismo para discutir tendências e desafios na indústria de notícias.
      </p>
      <p><a class="btn btn-secondary" href="#" role="button">Ver mais detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Mostra de Fotografia EtecNews</h2>
      <p>
      10 a 12 de junho de 2023, Rua Tupinanbas, 250 - Uma exposição de fotos produzidas por fotógrafos colaboradores da EtecNews, explorando temas como cultura, esportes, política e sociedade.
      </p>
      <p><a class="btn btn-secondary" href="#" role="button">Ver mais detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>EtecNews no Palco</h2>
      <p>
      1º de setembro de 2023, Teatro Rua Tupinanbas, Rua Tupinanbas, 500 - Um evento de entretenimento e cultura com apresentações musicais, teatrais e de dança, explorando temas relevantes para a sociedade.
      </p>

      <p><a class="btn btn-secondary" href="#" role="button">Ver mais detalhes &raquo;</a></p>
    </div>
  </div>

</div> <!-- /container -->

</main>

@endsection
