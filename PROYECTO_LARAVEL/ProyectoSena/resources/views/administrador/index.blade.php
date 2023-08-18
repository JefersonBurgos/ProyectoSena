<!DOCTYPE html>
<html>
<head>
    <title>Administradores</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="header">
        <h1>Hola Super Administrador</h1>
        <a href="{{ url('/administrador/create') }}">Registrar Administrador</a>
        <a href="{{ url('calificarAdmin/create') }}">Calificar Administrador</a>
        <a href="/login">Cerrar sesión</a>
    </div>

    <div class="container table-container">
    <table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Identificacion</th>
            <th>Cargo</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($administradores as $administrador)
        <tr>
            <td>{{$administrador->id}}</td>
            <td>{{$administrador->Nombre}}</td>
            <td>{{$administrador->Id_Admin}}</td>
            <td>{{$administrador->Cargo}}</td>
            <td>
            <a href="{{url('/administrador/'.$administrador->id.'/edit')}}">
            Editar

            </a>    
                
            <form action="{{url('/administrador/'.$administrador->id)}}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" onclick="return confirm('¿Quieres Borrar?')"
             value="Borrar">
            </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
</body>
</html>