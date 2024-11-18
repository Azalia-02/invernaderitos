<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>
<body>
<div id="encabezado">
    <img src="{{ 'img/dino.jpg' }}" alt="logo empresa" id="imgenbn">
    <nav class="menu">
      <ul>
        <li>
          <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit" class="cierre">Cerrar sesión</button>
          </form>
        </li>  
        <li><a href="#">Bienvenido:</a></li>
      </ul>
    </nav>
  </div>

<br>
<br><br><br><br>
<hr>

    <div class="slideshow-container">
        <button class="carousel-button left" onclick="scrollLeft()">&#9664;</button>

        <div class="carousel" id="carousel">
            
            <div class="carousel-item" id="carousel">
                <img src="{{ asset('img/invernaderos.png') }}" alt="Invernaderos">
                <div class="content">
                    <p>Invernaderos</p>
                    <a href="{{ route('invernadero') }}" class="btn btn-default btn-lg">Ver Más</a>
                </div>
            </div>
            
            <div class="carousel-item" id="carousel">
                <img src="{{ asset('img/fertilizantes.png') }}" alt="Fertilizantes">
                <div class="content">
                    <p>Fertilizantes</p>
                    <a href="{{ route('invernadero') }}" class="btn btn-default btn-lg">Ver Más</a>
                </div>
            </div>

            <div class="carousel-item" id="carousel">
                <img src="{{ asset('img/herramientas.png') }}" alt="Herramientas">
                <div class="content">
                    <p>Herramientas</p>
                    <a href="{{ route('herramientas') }}" class="btn btn-default btn-lg">Ver Más</a>
                </div>
            </div>

            <div class="carousel-item" id="carousel">
                <img src="{{ asset('img/plantas.png') }}" alt="Plantas">
                <div class="content">
                    <p>Plantas</p>
                    <a href="{{ route('planta') }}" class="btn btn-default btn-lg">Ver Más</a>
                </div>
            </div>

            <div class="carousel-item" id="carousel">
                <img src="{{ asset('img/clientes.png') }}" alt="Clientes">
                <div class="content">
                    <p>Clientes</p>
                    <a href="{{ route('planta') }}" class="btn btn-default btn-lg">Ver Más</a>
                </div>
            </div>

            <div class="carousel-item" id="carousel">
                <img src="{{ asset('img/personales.png') }}" alt="Personal">
                <div class="content">
                    <p>Personal</p>
                    <a href="{{ route('personal') }}" class="btn btn-default btn-lg">Ver Más</a>
                </div>
            </div>
        </div>

        <button class="carousel-button right" onclick="scrollRight()">&#9654;</button>
    </div>

    <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
    </div>
    
    <script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/carousel_admin.js') }}"></script>
    </script>
</body>
</html>