Este es el formulario para agregar nuevos empleados

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf

<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" id="Nombre">
<br>

<label for="Apellido">Apellido</label>
<input type="text" name="Apellido" id="Apellido">
<br>

<label for="Identificacion">Identificacion</label>
<input type="text" name="Identificacion" id="Identificacion">
<br>

<label for="Dependencia">Dependencia</label>
<input type="text" name="Dependencia" id="Dependencia">
<br>

<label for="Cargo">Cargo</label>
<input type="text" name="Cargo" id="Cargo">
<br>

<label for="FechaIngreso">Fecha de ingreso</label>
<input type="date" id="FechaIngreso" name="FechaIngreso">
<br>

<label for="FechaTerminacion">Fecha de terminacion</label>
<input type="date" id="FechaTerminacion" name="FechaTerminacion">
<br>


<label for="TipoContrato">Tipo de contrato</label>
<input type="text" name="TipoContrato" id="TipoContrato">
<br>


<input type="submit" value="Guardar Datos">

</form>