<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Elecciones UCAB</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <link href="{!! asset('css/menu.css') !!}" media="all" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="{!! asset('js/menu.js') !!}"></script>
        <!-- Styles -->
        
        <style>
        </style>
    </head>
    <body>
        <header>
            <nav id="navbar" class="navbar navbar-default">
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            @yield('usuario', 'Prueba')
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opciones<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Ajustes</a></li>
                                <li><a href="#">Cerrar Sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- <button class="btn btn-primary"><i class="fas fa-align-justify"></i></button> -->
                </div>
                
            </nav>
        </header>
        
        <div class="sidebar">
            <ul>
                <li><a href="http://">Opcion 1</a></li>
                <li class="submenu">
                    <a href="#">Opcion 2 <span class="caret"></span></a>
                    <ul>
                        <li><a href="#">Opcion 2.1</a></li>
                        <li><a href="#">Opcion 2.2</a></li>
                    </ul>
                </li>
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
     
    </body>

</html>
