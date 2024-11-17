<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>
        <link rel="stylesheet" href=" {{ asset('css/estilos.css') }}">
    
    </head>

        <body>
            <div class="container">
                <h3>Nuevo Registro de Herramienta</h3>
                <h5> CRUD:Herramienta -> Registro</h5>
                <hr>
                <br>
                <form action="{{ route('herramienta_registrar') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3>Datos de la herramienta</h3>

                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" name="nombre" value="{{ old('nombre') }}" id="floatingNombre"
                        placeholder="ejemplo: Destornilladores" aria-describedby="TipoHelp">
                        <label for="floatingTipo">Nombre</label>
                        <div id="NombreHelp" class="form-text">@if($errors->first('nombre')) <i>El campo Nombre no es correcto !!!</i> @endif</div>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="descripcion" id="floatingDescripcion"
                        placeholder="Descripción de la herramienta" aria-describedby="DescripcionHelp">{{ old('descripcion') }}</textarea>
                        <label for="floatingDescripcion">Descripción:</label>
                        <div id="DescripcionHelp" class="form-text">
                         @if ($errors->first('descripcion'))
                        <i>El campo descripción no es correcto!</i>
                        @endif
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="precio" value="{{ old('precio') }}" id="floatingPrecio"
                        placeholder="ejemplo: $300" aria-describedby="PrecioHelp">
                        <label for="floatingPrecio">Precio</label>
                        <div id="PrecioHelp" class="form-text">@if($errors->first('precio')) <i>El campo Precio no es correcto !!!</i> @endif</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" name="stock" value="{{ old('stock') }}" id="floatingStock">
                        <label for="floatingStock">Stock</label>
                        <div id="StockHelp" class="form-text">@if($errors->first('stock')) <i>El campo Stock no es correcto !!!</i> @endif</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" name="foto" id="floatingfoto"
                        placeholder="- - - -" aria-describedby="fotoHelp">
                        <label for="floatingfoto">Foto</label>
                        <div id="fotoHelp" class="form-text">Busque una Imagen para su perfil (<i>Formatos</i>: jpg/png/bmp)</div>
                    </div>

<hr><br>

<button type="submit" class="btn btn-primary">Guardar</button>
<a href="{{ route('herramientas') }}">
<button type="button" class="btn btn-danger">Cancelar</button>
</a>
</form>

<br><br><br>
</div>
</body>
</html>
