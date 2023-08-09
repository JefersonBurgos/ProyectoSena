Esta es para crear un nuevo administrador

<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
@csrf
<!--Tener en cuenta lo anterior para cambiar url cuando
se tenga el crud completo-->

<label for="Nombre">Identificacion del Administrador</label>
<input type="text" name="Nombre" id="Nombre">
<br>

<label for="Apellido">Nombre</label>
<input type="text" name="Apellido" id="Apellido">
<br>

<label for="Identificacion">Cargo</label>
<input type="text" name="Identificacion" id="Identificacion">
<br>

<input type="submit" value="Guardar Datos">

</form>