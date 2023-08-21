






<!DOCTYPE html>
<html>
<head>
    <title>Agregar administradores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <div class="container">
        <form action="{{ url('/superAdministrador') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!--Esta es la llave de seguridad para formularios laravel-->
            <label for="Id_Sadmin">Identificacion del super Administrador</label>
            <input type="text" name="Id_Sadmin" id="Id_Sadmin" required>
            <br>

            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" id="NombreAdmin" required>
            <br>

            <label for="Cargo">Cargo</label>
            <input type="text" name="Cargo" id="CargoAdmin" required>
            <br>

            <label for="Correo">Correo</label>
            <input type="email" name="Correo"  id="Correo" required>
            <br>

            <label for="Clave">Clave</label>
            <input type="password" name="Clave"  id="Clave" required>
            <br>

            <input type="submit" value="Guardar Datos">

            <a href="{{url('administrador/')}}">Regresar</a>

        </form>
    </div>
</body>
</html>