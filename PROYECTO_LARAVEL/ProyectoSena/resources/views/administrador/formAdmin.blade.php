<label for="Id_Admin">Identificacion del administrador</label>
<input type="text" name="Id_Admin" value="{{isset($administrador->Id_Admin)?$administrador->Id_Admin:''}}" id="Id_Admin">
<br>

<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{isset($administrador->Nombre)?$administrador->Nombre:''}}" id="NombreAdmin">
<br>

<label for="Cargo">Cargo</label>
<input type="text" name="Cargo" value="{{isset($administrador->Cargo)?$administrador->Cargo:''}}" id="CargoAdmin">
<br>

<input type="submit" value="Guardar Datos">

<a href="{{url('administrador/')}}">Regresar</a>
<br>