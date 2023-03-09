@extends('layout.master')

@section('title', 'Sobre')

@section('content')
<section class="mb-4">
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Sobre</h2>

    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">
        EtecNews é uma empresa de notícias líder no mercado que fornece informações precisas e atualizadas sobre vários assuntos, como política, tecnologia, ciência, entretenimento e esportes. A empresa é conhecida por sua abordagem imparcial e por cobrir as principais notícias e eventos em tempo hábil.
    </p>

    <p class="text-center w-responsive mx-auto mb-5">
        Com uma equipe altamente qualificada de jornalistas e editores, a EtecNews está sempre buscando fornecer aos seus leitores informações precisas e relevantes. A empresa tem um forte compromisso com a qualidade, e seus padrões elevados garantem que cada artigo seja bem pesquisado, objetivo e livre de sensacionalismo.
    </p>

    <p class="text-center w-responsive mx-auto mb-5">
        Além de seu site de notícias, a EtecNews também tem uma forte presença nas redes sociais, onde seus seguidores podem acessar conteúdo exclusivo e interagir com a equipe da empresa. Com uma audiência global, a EtecNews tem o objetivo de se tornar a principal fonte de notícias para pessoas de todo o mundo.

    <p class="text-center w-responsive mx-auto mb-5">
        A EtecNews também valoriza a responsabilidade social, e se esforça para destacar questões importantes, como direitos humanos e justiça social, em suas reportagens. A empresa acredita que é importante usar sua plataforma para promover mudanças positivas na sociedade.
    </p>

    <p class="text-center w-responsive mx-auto mb-5">
        Em resumo, a EtecNews é uma empresa de notícias respeitável, comprometida em fornecer informações precisas e objetivas para seu público global. Com uma equipe experiente e um forte compromisso com a qualidade, a empresa está bem posicionada para se tornar uma das principais fontes de notícias do mundo.
        <br><br><br>

        <img class="img img-about" src="{{ url('images/imagem-sobre.png') }}" alt="Pessoas" />
    </p>

    
</section>
@endsection