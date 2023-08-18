<!DOCTYPE html>
<html>
<head>
    <title>Formulario de calificacion de empleados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <div class="container">
        <form action="/calificarEmp" method="post" enctype="multipart/form-data">
            @csrf

            <label for="Id_Admin">Identificacion Administrador</label>
            <input type="text" name="Id_Admin" id="Id_Admin" required>
            <br>

            <label for="Id_Sadmin">Identificacion Empleado</label>
            <input type="text" name="Id_empleado" id="Id_Sadmin" required>
            <br>

            <label for="Calificacion">Calificacion</label>
            <input type="text" name="Calificacion" id="CalificacionEmp" required>
            <br>

            <label for="Retroalimentacion">Retroalimentacion</label>
            <br>
            <textarea id="RetroalimentacionAdmin" name="Retroalimentacion" rows="4" cols="50" required></textarea><br><br>

            <br>
            <input type="submit" value="Guardar Datos">
            <a href="{{url('empleado/')}}">Regresar</a>

        </form>
    </div>
</body>
</html>

