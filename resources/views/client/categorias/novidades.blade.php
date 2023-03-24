@extends('layout.client.master')

@section('title', 'Novidades')

@section('content')
<main role="main">

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron novidades py-5 my-5 mb-5" style="text-align: center; height: 60vh;">
  <div class="container p-5 shadow" style="display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 1.2rem">
    <h1 class="display-3 mb-5">Fique por dentro de nossas novidades!</h1>
  </div>
</div>

<div class="container" style="margin-top: 6rem;">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2>EtecNews lança aplicativo de notícias móvel</h2>
      <p>
      Com o novo aplicativo da EtecNews, os usuários poderão acessar notícias atualizadas em tempo real a partir de seus dispositivos móveis, personalizar suas preferências de conteúdo e receber notificações push para as histórias mais importantes. Disponível para download gratuito na App Store e Google Play.
      </p>
      <p><a class="btn btn-secondary" href="#" role="button">Ver mais detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>EtecNews anuncia parceria com a CNN</h2>
      <p>
      Em uma colaboração emocionante, a EtecNews uniu forças com a CNN para trazer aos leitores notícias e análises ainda mais abrangentes e aprofundadas. A partir de agora, os usuários da EtecNews terão acesso exclusivo a conteúdo produzido pela CNN.
      </p>
      <p><a class="btn btn-secondary" href="#" role="button">Ver mais detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>Estreia novo programa de entrevistas ao vivo</h2>
      <p>
      A partir de agora, a EtecNews apresentará um programa semanal de entrevistas ao vivo, intitulado "EtecNews Entrevista". Com anfitriões experientes e convidados especiais da indústria, o programa promete ser uma fonte de discussões aprofundadas sobre as notícias mais quentes do momento.
      </p>

      <p><a class="btn btn-secondary" href="#" role="button">Ver mais detalhes &raquo;</a></p>
    </div>
    <div class="col-md-4">
      <h2>EtecNews expande cobertura internacional</h2>
      <p>
      A EtecNews está expandindo sua equipe de repórteres internacionais, com o objetivo de aumentar a cobertura de notícias em todo o mundo. A partir de agora, os leitores podem esperar ainda mais histórias internacionais importantes e análises aprofundadas.
      </p>

      <p><a class="btn btn-secondary" href="#" role="button">Ver mais detalhes &raquo;</a></p>
    </div>
  </div>

</div> <!-- /container -->

</main>

@endsection
