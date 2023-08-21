<!DOCTYPE html>
<html>
<head>
    <title>Bienvenida</title>
</head>
<body>
    <h2>Bienvenido</h2>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <p>¡Bienvenido! Has iniciado sesión correctamente.</p>

    <a href="/login">Cerrar sesión</a>
</body>
</html>
