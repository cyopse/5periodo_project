<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- Meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">

        <!-- titulo -->
        <title>@yield('title')</title>

        <!-- icone no navegador -->
        <link rel="icon" href="img/icone_projeto.svg">

        <!-- Fonte Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- CSS da aplicação -->
        <link rel="stylesheet" type="text/css" href="css/styles.css">

        <!-- JS da aplicação -->
        <script src="/js/scripts.js"></script>
    </head>

    <body>
        <header>
            <!-- Barra de navegação -->
            <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
                <div class="container"> 
                    <a href="/" class="navbar-brand">
                        <img src="img/icon_logo.png" width="38">
                    </a>
                    
                    <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                        <i class="fa-solid fa-bars text-white"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="nav-principal">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="" class="nav-link">Serviços</a>
                            </li>

                            <li class="nav-item divisor"></li>

                            <li class="nav-item">
                                <a href="cadastro" class="nav-link">Cadastrar</a>
                            </li>

                            <li class="nav-item">
                                <a href="" class="nav-link">Entrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        @yield('content')
    </body>
</html>
