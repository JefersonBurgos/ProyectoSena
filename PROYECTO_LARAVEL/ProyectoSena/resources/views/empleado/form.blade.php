<br>
<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:''}}" id="Nombre">
<br>
<label for="Apellido">Apellido</label>
<input type="text" name="Apellido" value="{{isset($empleado->Apellido)?$empleado->Apellido:''}}" id="Apellido">
<br>
<label for="Identificacion">Identificacion</label>
<input type="text" name="Identificacion" value="{{isset($empleado->Identificacion)?$empleado->Identificacion:''}}" id="Identificacion">
<br>
<label for="Dependencia">Dependencia</label>
<input type="text" name="Dependencia" value="{{isset($empleado->Dependencia)?$empleado->Dependencia:''}}" id="Dependencia">
<br>
<label for="Cargo">Cargo</label>
<input type="text" name="Cargo" value="{{isset($empleado->Cargo)?$empleado->Cargo:''}}" id="Cargo">
<br>
<label for="FechaIngreso">Fecha de ingreso</label>
<input type="date" id="FechaIngreso" value="{{isset($empleado->FechaIngreso)?$empleado->FechaIngreso:''}}" name="FechaIngreso">
<br>
<label for="FechaTerminacion">Fecha de terminacion</label>
<input type="date" id="FechaTerminacion" value="{{isset($empleado->FechaTerminacion)?$empleado->FechaTerminacion:''}}" name="FechaTerminacion">
<br>
<label for="TipoContrato">Tipo de contrato</label>
<input type="text" name="TipoContrato" value="{{isset($empleado->TipoContrato)?$empleado->TipoContrato:''}}" id="TipoContrato">
<br>
<input type="submit" value="Guardar Datos">
<a href="{{url('empleado/')}}">Regresar</a>
<br>
