<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="icon" href="img/icone_projeto.svg">

    <!-- Fonte -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS da aplicação -->

    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

</head>

<body>
    <div class="container-fluid">
        <header>

            <nav class="navbar navbar-expand-md navbar-light bg-warning">
                <div class="row">

                    <div class="col-sm-2">
                        <a href="home" class="navbar-brand">
                            <img src="img/icone_projeto.svg" width="40">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                            <i class="fa-solid fa-bars text-white"></i>
                        </button>
                    </div>
                    <div class="col-sm-3">
                        <div class="collapse navbar-collapse" id="nav-principal">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a href="cadastro" class="nav-link">Cadastrar</a>
                                </li>
                                <li>
                                    <a href="" class="nav-link">Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4"></div>

                </div>
            </nav>


        </header>
        <main>

            <div class="row">
                @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
    </div>
        </main>
    </div>
</body>

</html>