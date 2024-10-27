<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href=" {{ asset('css/estilos.css') }}">
    </head>
<body>
    <div id="encabezado">
        <a href="login.html">
        <img src="{{ 'img/dino.jpg' }}" alt="logo empresa" id="imgenbn">
        </a>
        <nav class="menu">
            <ul>
                <li><a href="contactanos.html">Contactanos</a></li>
                <li><a href="login.html">Ingresa</a></li>
            </ul>
        </nav>
    </div>
    <br>
    <div id="cuerpo">
        <center>
        <form  method="post" action="val.php">
            <h2>Bienvenido</h2>
            <label for="username">Ingresa tu correo</label>
            <input type="text" id="usernamec" name="usernamec" required placeholder="Ingresa tu correo">
            <label for="password">Ingresa tu contraseña</label>
            <input type="password" id="password" name="password" required placeholder="Password">
            <button type="submit">login</button>
            <br>
            <a href="{{ route('login_alta') }}">
                <button type="button" class="btn btn-primary btn-sm">Registrar</button>
                </a>
        </form>
        </center>
    </div>
</body>
</html>