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
                <h3>Nuevo Registro de Invernadero</h3>
                <h5> CRUD:Invernadero -> Registro</h5>
                <hr>
                <br>
                <form action="{{ route('invernadero_registrar') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3>Datos del invernadero</h3>

                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" name="tipo" value="{{ old('tipo') }}" id="floatingTipo"
                        placeholder="ejemplo: Invernadero túnel" aria-describedby="TipoHelp">
                        <label for="floatingTipo">Tipo</label>
                        <div id="TipoHelp" class="form-text">@if($errors->first('tipo')) <i>El campo Tipo no es correcto !!!</i> @endif</div>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" name="descripcion" id="floatingDescripcion"
                        placeholder="Descripción del invernadero" aria-describedby="DescripcionHelp">{{ old('descripcion') }}</textarea>
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
                        <input type="file" class="form-control" name="foto" id="floatingfoto"
                        placeholder="- - - -" aria-describedby="fotoHelp">
                        <label for="floatingfoto">Foto</label>
                        <div id="fotoHelp" class="form-text">Busque una Imagen para su perfil (<i>Formatos</i>: jpg/png/bmp)</div>
                    </div>

<hr><br>

<button type="submit" class="btn btn-primary">Guardar</button>
<a href="{{ route('invernadero') }}">
<button type="button" class="btn btn-danger">Cancelar</button>
</a>
</form>

<br><br><br>
</div>
</body>
</html>

