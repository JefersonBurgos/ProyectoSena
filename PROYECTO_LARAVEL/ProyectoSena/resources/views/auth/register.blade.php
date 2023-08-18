<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h2>Registro de usuario</h2>

    @if(session('message'))
        <p>{{ session('message') }}</p>
    @endif

    <form method="POST" action="/register">
        @csrf
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre" required><br>

        <label for="Correo">Correo electrónico:</label>
        <input type="email" name="Correo" required><br>

        <label for="Clave">Contraseña:</label>
        <input type="password" name="Clave" required><br>

        <label for="role">Rol:</label>
        <input type="text" name="role" required><br>

        <button type="submit">Registrarse</button>
    </form>
    <p>Ya tienes una cuenta? <a href="/login">Inicia Sesion</a></p>
</body>
</html>