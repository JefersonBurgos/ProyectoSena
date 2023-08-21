<!DOCTYPE html>
<html>
<head>
    <title>Empleados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="header">
        <h1>Hola Administrador</h1>
        <a href="{{ url('/empleado/create') }}">Registrar Empleado</a>
        <a href="{{ url('calificarEmp/create') }}">Calificar Empleado</a>
        <a href="{{ route('logout') }}">Cerrar sesión</a>

    </div>

    <div class="container table-container">
        <table class="table table-striped">
                <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Identificacion</th>
                    <th>Dependencia</th>
                    <th>Cargo</th>
                    <th>Fecha de ingreso</th>
                    <th>Fecha de terminacion</th>
                    <th>Tipo de contrato</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($empleados as $empleado)
                <tr>
                    <td>{{$empleado->id}}</td>
                    <td>{{$empleado->Nombre}}</td>
                    <td>{{$empleado->Apellido}}</td>
                    <td>{{$empleado->Identificacion}}</td>
                    <td>{{$empleado->Dependencia}}</td>
                    <td>{{$empleado->Cargo}}</td>
                    <td>{{$empleado->FechaIngreso}}</td>
                    <td>{{$empleado->FechaTerminacion}}</td>
                    <td>{{$empleado->TipoContrato}}</td>
                    <td>
                    <a href="{{url('/empleado/'.$empleado->id.'/edit')}}">
                    Editar
                    </a>    
                        
                    <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
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
