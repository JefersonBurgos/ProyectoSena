<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Edicion de Empleados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <br>
    <div class="container">
        <form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('empleado.form')
        </form>
    </div>
</body>
</html>