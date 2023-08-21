<!DOCTYPE html>
<html>
<head>
    <title>Editar un administrador</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <div class="container">
        <form action="{{url('/administrador/'.$administrador->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PATCH')}}
            <label for="Identificacion">Identificacion del administrador</label>
            <input type="text" name="Identificacion" value="{{isset($administrador->Identificacion)?$administrador->Identificacion:''}}" id="Id_Admin">
            <br>

            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre" value="{{isset($administrador->Nombre)?$administrador->Nombre:''}}" id="NombreAdmin">
            <br>

            <label for="Cargo">Cargo</label>
            <input type="text" name="Cargo" value="{{isset($administrador->Cargo)?$administrador->Cargo:''}}" id="CargoAdmin">
            <br>

            <input type="submit" value="Guardar Datos">

            <a href="{{url('administrador/')}}">Regresar</a>
            <br>

        </form>
    </div>
</body>
</html>