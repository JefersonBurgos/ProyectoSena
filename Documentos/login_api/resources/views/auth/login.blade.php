<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form method="POST" action="/api/login">
        @csrf
        <label for="Correo">Correo:</label>
        <input type="email" name="Correo" required><br>

        <label for="Clave">Contraseña:</label>
        <input type="password" name="Clave" required><br>

        <button type="submit">Iniciar Sesión</button>
    </form>
    <p>No tienes una cuenta? <a href="/api/register">Regístrate aquí</a></p>
</body>
</html>
