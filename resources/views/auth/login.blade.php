<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body>
    
    <div class="header">
        <h1>Control de Empleados</h1>
    </div>
    <div class="container">
        <h2>Iniciar Sesión</h2>

        @if(session('message'))
            <p class="message">{{ session('message') }}</p>
        @endif

        <form method="POST" action="/login">
            @csrf
            <label for="Correo">Correo:</label>
            <input type="email" name="Correo" required>

            <label for="Clave">Contraseña:</label>
            <input type="password" name="Clave" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>
