Aqui se crearan los super Administradores

<form action="{{ url('/superAdministrador') }}" method="post" enctype="multipart/form-data">
@csrf
<!--Esta es la llave de seguridad para formularios laravel-->
<label for="Id_Sadmin">Identificacion del super Administrador</label>
<input type="text" name="Id_Sadmin" id="Id_Sadmin">
<br>

<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" id="NombreAdmin">
<br>

<label for="Cargo">Cargo</label>
<input type="text" name="Cargo" id="CargoAdmin">
<br>

<input type="submit" value="Guardar Datos">

</form>