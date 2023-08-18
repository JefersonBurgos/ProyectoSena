<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="header">
        <h1>Bienvenido Empleado</h1>
        <a href="/login">Cerrar sesión</a>
    </div>

    <div class="container">
        @if(session('message'))
            <div class="message">{{ session('message') }}</div>
        @endif

        <p>¡Bienvenido! Aquí encontrará su información completa.</p>
    </div>
</body>
</html>


