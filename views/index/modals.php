<div id="agregarEmpleado" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar Empleado</h4>
      </div>
      <div class="modal-body">
		<form name="formEmpleado" onsubmit="registrar(); return false">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="email" type="text" class="form-control" name="email" placeholder="Email" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="salario" type="text" class="form-control" name="salario" placeholder="salario" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="puesto" type="text" class="form-control" name="puesto" placeholder="Puesto" required autocomplete="off">
		  </div>	
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
            <select id="departamento" name="departamento" class="form-control">
				<option value="1">ADMINISTRATIVO</option>
                <option value="2">RECURSOS HUMANOS</option>
                <option value="3">INGENIERIA</option>
            </select>
		    
		  </div>	
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
		    <select id="role" name="role" class="form-control">
			<option value="1">Tecnico</option>
                <option value="2">Administrativo</option>
                <option value="3">Analista</option>
            </select>
		  </div>		  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div id="actualizarEmpleado" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar informacion empleado </h4>        
      </div>
      <div class="modal-body">
		<form name="formEmpleadoActualizar" onsubmit="actualizar(); return false">
		<input type="text" name="id_empleado" id="id_empleado" style="display: none;">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="nombre" type="text" class="form-control" name="name" placeholder="Nombre" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="email" type="email" class="form-control" name="last_name" placeholder="email" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="salario" type="text" class="form-control" name="salario" placeholder="salario" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="puesto" type="text" class="form-control" name="puesto" placeholder="puesto" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
            <select id="departamento" name="departamento" class="form-control">
                <option value="1">ADMINISTRATIVO</option>
                <option value="2">RECURSOS HUMANOS</option>
                <option value="3">INGENIERIA</option>
            </select>
		    
		  </div>	
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
		    <select id="role" name="role" class="form-control">
                <option value="1">Tecnico</option>
                <option value="2">Administrativo</option>
                <option value="3">Analista</option>
            </select>
		  </div>		  
      </div>		  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>

<!-- Este archivo contiene la estructura del modal utilizado para agregar o editar empleados. Proporciona un formulario que permite al usuario ingresar o actualizar la información del empleado, como nombre, correo electrónico, salario y puesto. Al enviar el formulario, se procesan los datos a través de funciones de JavaScript y se envían al servidor para su almacenamiento o actualización en la base de datos. -->