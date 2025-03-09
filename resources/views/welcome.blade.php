<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="{{ asset('css/bodyPrincipal.css') }}" rel="stylesheet" />
    </head>
    <body class="principalBody">
        <header class="cabeceraPrincipal">
            <div class="seccionImage">
                <img src="./assets/logoCompany1.jpeg" alt="Logo del producto" class="imagenBarNav">
            </div>
            <div class="seccionNavigationViews">
                <button class="buttonNavegation">Inicio</button>
                <button class="nav-item buttonNavegation">
                    <a href="" class="dropdown-btn">HIT Solutions</a>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href="#">Quienes somos</a></li>
                            <li><a href="#">Misión y visión</a></li>
                            <li><a href="#">Historia</a></li>
                        </ul>
                    </div>
                </button>
                <button class="nav-item buttonNavegation">
                    <a href="" class="dropdown-btn">Nuestros productos</a>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href="#">MDMR</a></li>
                            <li><a href="#">Vital band</a></li>
                        </ul>
                    </div>
                </button>
                <a class="buttonNavegation" href="https://mdmr2.idgs2023s.com.mx/index.php">Usar MDMR</a>
                <a class="buttonNavegation" href="">Usar Vital Band</a>
            </div>
        </header>
    </body>
</html>
