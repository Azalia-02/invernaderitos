<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=" {{ asset('css/estilos.css') }}">
        <title>Lista de Plantas</title>
        

        <body>
        <div id="encabezado">
        <img src="{{ 'img/dino.jpg' }}" alt="logo empresa" id="imgenbn">
        </a>
        <nav class="menu">
            <ul>
                <li><a href="desc.php"> Cerrar Cesión </a></li>	
                <center>
                <li> <a href="">Bienvenido:  </a></li>   
                </center>
		    	<li class="desp">
                    <a href="javascript:void(0)" class="menu">Administración de catalogos</a>
                    <div class="cont_cj">
                        <a href="adminis.php">Cliente</a>
                        <a href="adminisfr.php">Fertilizante</a>
                        <a href="{{ route('herramientas') }}">Herramienta</a>
                        <a href="{{ route('invernadero') }}">Tipo de invernadero</a>
                        <a href="{{ route('personal') }}">Personal</a>
                        <a href="{{ route('planta') }}">Plantas</a>
                    </div>
                </li> 
		    </ul>
        </nav>
    </div>
    <br>
        <div style=" float: inline-start; position: relative;  width: 100%; height: 250px; padding: 2px;">
<div class="container">
    <br><br>
    <br>
    <h3>Administración de registro de plantas</h3>
    <h5>Tabla de registro</h5>
    <hr>
    <p style="text-align: right;">
        <a href="{{ route('planta_alta') }}">
            <button type="button" class="boton">Nuevo Registro</button>
</a>
</p>
<hr><br>
<table class="table">
    <tr>
        <th>Foto</th>
        <th>N°</th>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Editar</th>
        <th>Eliminar</th>
    
</tr>
@foreach($planta as $plantas)
<tr>
    <td><img src="{{ 'img/' . $plantas->imagen }}" style="width: 30px; height: 30px;"></td>
    <td>{{ $plantas->id_planta }}</td>
    <td>{{ $plantas->nombre }}</td>
    <td>{{ $plantas->tipo }}</td>
    <td><a href="{{ route('planta_editar', $plantas->id_planta) }}">
            <button type="button" class="boton2">Editar</button>
</a></td>
<td><a href="{{ route('planta_borrar', $plantas->id_planta) }}">
            <button type="button" class="boton2">Eliminar</button>
</a></td>
<td><a href="{{ route('planta_detalle', $plantas->id_planta) }}">
            <button type="button" class="boton2">Consultar</button>
</a></td>
</tr>
@endforeach
</table>
</div>
</body>
</html>
