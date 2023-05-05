<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') || EtecNews</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="/images/logo/EtecNews/favicon_transparent_32x32.png">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    {{-- CSS Files --}}
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="{{ url('lib/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('lib/owl.theme.default.min.css') }}">

    {{-- DataTables CSS --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
</head>

<body>
    <div class="container-fluid page">

        <header class="container-fluid header-page">
            <a class="navbar-brand" href="#">
                <img class="image" src="{{ url('/images/logo/EtecNews/default_transparent_765x625.png') }}"
                    alt="EtecNews" />
            </a>

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"
                            style="--bs-scroll-height: 100px;">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('admin.home') }}">
                                    <i class="fa-regular fa-house"></i>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.categorias') }}">
                                    Categorias
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.noticias') }}">
                                    Notícias
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.usuarios') }}">
                                    Usuários
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main class="container page-content">
            @yield('content')
        </main>

        <footer class="container-fluid footer-page">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <img
                            class="image brand-footer"
                            src="{{ url('/images/logo/EtecNews/default_transparent-footer.png') }}"
                            alt="EtecNews"
                        />
                    </div>

                    <div class="col col-medias-social-buttons">
                        <h4 class="h4">
                            Midias Sociais
                        </h4>

                        <ul class="list-group medias-socials">
                            <li class="list-group-item social-item">
                                <i class="fa-brands fa-facebook-f"></i>
                            </li>
                            <li class="list-group-item social-item">
                                <i class="fa-brands fa-instagram"></i>
                            </li>
                            <li class="list-group-item social-item">
                                <i class="fa-brands fa-youtube"></i>
                            </li>
                            <li class="list-group-item social-item">
                                <i class="fa-brands fa-twitter"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    {{-- JQuery JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {{-- DataTables JS --}}
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready( function () {
                $('#tabela').DataTable();
            });
        </script>

    {{-- OWL JS --}}
    <script src="{{ url('lib/owl.carousel.min.js') }}"></script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
</body>

</html>
