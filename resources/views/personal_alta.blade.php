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
                <h3>Nuevo Registro de Personal</h3>
                <h5> CRUD:Personal -> Registro</h5>
                <hr>
                <br>
                <form action="{{ route('personal_registrar') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <h3>Datos personales</h3>

                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" name="nombre" value="{{ old('nombre') }}" id="floatingNombre"
                        placeholder="ejemplo: Azalia" aria-describedby="NombreHelp">
                        <label for="floatingNombre">Nombre</label>
                        <div id="NombreHelp" class="form-text">@if($errors->first('nombre')) <i>El campo Nombre(s) no es correcto !!!</i> @endif</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" name="app" value="{{ old('app') }}" id="floatingApp"
                        placeholder="ejemplo: Mejía" aria-describedby="AppHelp">
                        <label for="floatingApp">Apellido Paterno</label>
                        <div id="AppHelp" class="form-text">@if($errors->first('app')) <i>El campo Apellido(s) no es correcto !!!</i> @endif</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" name="apm" value="{{ old('apm') }}" id="floatingApm"
                        placeholder="ejemplo: Vázquez" aria-describedby="ApmHelp">
                        <label for="floatingApm">Apellido Materno</label>
                        <div id="ApmHelp" class="form-text">@if($errors->first('apm')) <i>El campo Apellido(s) no es correcto !!!</i> @endif</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="tel" class="form-control" name="telefono" value="{{ old('telefono') }}" id="floatingTelefono"
                        placeholder="ejemplo: 7221945197" aria-describedby="TelefonoHelp">
                        <label for="floatingTelefono">Telefono</label>
                        <div id="TelefonoHelp" class="form-text">@if($errors->first('telefono')) <i>El campo Telefono no es correcto !!!</i> @endif</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="floatingEmail"
                        placeholder="ejemplo: ejemplo@gmail.com" aria-describedby="EmailHelp">
                        <label for="floatingEmail">Email</label>
                        <div id="EmailHelp" class="form-text">@if($errors->first('email')) <i>El campo Email no es correcto !!!</i> @endif</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" name="curp" value="{{ old('curp') }}" id="floatingCurp">
                        <label for="floatingCurp">CURP</label>
                        <div id="CurpHelp" class="form-text">@if($errors->first('curp')) <i>El campo CURP no es correcto !!!</i> @endif</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" name="rfc" value="{{ old('rfc') }}" id="floatingRfc">
                        <label for="floatingRfc">RFC</label>
                        <div id="RfcHelp" class="form-text">@if($errors->first('rfc')) <i>El campo RFC no es correcto !!!</i> @endif</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="input" class="form-control" name="cargo" value="{{ old('cargo') }}" id="floatingCargo">
                        <label for="floatingCargo">Cargo</label>
                        <div id="CargoHelp" class="form-text">@if($errors->first('cargo')) <i>El campo Cargo no es correcto !!!</i> @endif</div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="file" class="form-control" name="foto" id="floatingfoto"
                        placeholder="- - - -" aria-describedby="fotoHelp">
                        <label for="floatingfoto">Foto</label>
                        <div id="fotoHelp" class="form-text">Busque una Imagen para su perfil (<i>Formatos</i>: jpg/png/bmp)</div>
                    </div>

<hr><br>

<button type="submit" class="btn btn-primary">Guardar</button>
<a href="{{ route('personal') }}">
<button type="button" class="btn btn-danger">Cancelar</button>
</a>
</form>

<br><br><br>
</div>
</body>
</html>
