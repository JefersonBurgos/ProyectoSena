Mostrar la informacion del empleado que ingresa
<table class="table table-light">
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
            <td>Editar | Borrar</td>
        </tr>
        @endforeach
    </tbody>
</table>