@extends('layout.client.master')

@section('title', 'Projetos')

@section('content')
<main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron projetos py-5 my-5 mb-5" style="text-align: center; height: 60vh;">
  <div class="container p-5 shadow" style="display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 1.2rem">
    <h1 class="display-3 mb-5">Conheça nossos projetos!</h1>
  </div>
</div>

<div class="container" style="margin-top: 6rem;">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2>Programa de Mentoria de Jornalismo</h2>
      <p>
      O projeto consiste em um programa de mentoria de jornalismo para estudantes de jornalismo e recém-formados. A empresa irá selecionar jornalistas experientes para orientar e dar dicas para os mentees em suas áreas de interesse, e ajudá-los a construir uma carreira de sucesso no jornalismo.
      </p>
      <p><a class="btn btn-secondary" href="#" role="button">Ver mais detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>EtecNews Podcast</h2>
      <p>
      A empresa lançará um podcast semanal onde os ouvintes poderão se manter atualizados com as últimas notícias em diferentes áreas, como política, economia, entretenimento, esportes e muito mais. Cada episódio contará com convidados especiais, que irão compartilhar suas opiniões e perspectivas sobre os assuntos abordados.
      </p>
      <p><a class="btn btn-secondary" href="#" role="button">Ver mais detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>EtecNews Escola</h2>
      <p>
      O projeto consiste em levar o jornalismo para dentro das escolas, através de palestras e oficinas sobre a importância do jornalismo e como se tornar um jornalista. O objetivo é inspirar os jovens a seguir carreira no jornalismo, fornecendo informações sobre o setor e compartilhando experiências reais.
      </p>

      <p><a class="btn btn-secondary" href="#" role="button">Ver mais detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>EtecNews App</h2>
      <p>
      A empresa irá lançar um aplicativo móvel para que os usuários possam acessar as notícias em tempo real e ter uma experiência personalizada. O aplicativo terá recursos como notificações push, opções de compartilhamento em mídias sociais e seções personalizadas para diferentes interesses e preferências dos usuários.
      </p>

      <p><a class="btn btn-secondary" href="#" role="button">Ver mais detalhes &raquo;</a></p>
    </div>
  </div>



</div> <!-- /container -->

</main>

@endsection
