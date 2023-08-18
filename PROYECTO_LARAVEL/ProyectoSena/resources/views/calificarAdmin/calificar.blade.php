<!DOCTYPE html>
<html>
<head>
    <title>Calificar a los administradores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <div class="container">
        <form action="{{ url('/calificarAdmin') }}" method="post" enctype="multipart/form-data">
            @csrf

            <label for="Id_Admin">Identificacion Administrador</label>
            <input type="text" name="Id_Admin" id="Id_Admin">
            <br>

            <label for="Id_Sadmin">Identificacion Super Administrador</label>
            <input type="text" name="Id_Sadmin" id="Id_Sadmin">
            <br>

            <label for="Calificacion">Calificacion</label>
            <input type="text" name="Calificacion" id="CalificacionAdmin">
            <br>

            <label for="Retroalimentacion">Retroalimentacion</label>
            <br>
            <textarea id="RetroalimentacionAdmin" name="Retroalimentacion" rows="4" cols="50"></textarea><br><br>

            <br>
            <input type="submit" value="Guardar Datos">
            <a href="{{url('empleado/')}}">Regresar</a>

        </form>
    </div>
</body>
</html>