<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Elecciones UCAB</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{!! asset('css/menu.css') !!}" media="all" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="{!! asset('js/menu.js') !!}"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <header>
            <nav id="navbar" class="navbar navbar-expand-sm bg-dark navbar-dark pull-right">
                <div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">User</a>
                        </li>
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Configuracion
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#" style="color: #000000">Ajustes</a>
                                <a class="dropdown-item" href="#" style="color: #000000">Cerrar Sesion</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="">
            <div class="sidebar">
                <ul>
                    <li><a href="http://">Usuarios</a></li>
                    <!-- <li class="submenu">
                        <a href="#">Opcion 2 <span class="caret"></span></a>
                        <ul>
                            <li><a href="#">Opcion 2.1</a></li>
                            <li><a href="#">Opcion 2.2</a></li>
                        </ul>
                    </li> -->
                    <li><a href="http://">Opcion 3</a></li>
                    <li><a href="http://">Opcion 4</a></li>
                    <li><a href="http://">Opcion 5</a></li>
                    <li><a href="http://">Opcion 6</a></li>
                    <li><a href="http://">Opcion 7</a></li>
                    <li><a href="http://">Opcion 8</a></li>
                </ul>

            </div>

            <div class="contenido abrir">
                @yield('contenido-externo')
            </div>
        </div>
    </body>

</html>
