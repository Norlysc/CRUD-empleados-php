<?php

class empleadoController extends Empleado{

	function index(){
		require_once('views/all/header.php');
		require_once('views/all/nav.php');
		require_once('views/index/index.php');
		require_once('views/index/modals.php');
		require_once('views/all/footer.php');
	}

	function table_empleados(){
		?>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Email</th>
				<th>Salario</th>
				<th>Puesto</th>
				<th>Fecha Contratacion</th>
				<th>Departamento</th>
				<th>Role</th>
				<th>Accion</th>
				</tr>
			</thead>
			<tbody >		
		<?php
		foreach (parent::get_view_empleados()	as $data) {
		?>
		<tr>
			<td><?php echo $data->id_empleado; ?> </td>
			<td><?php echo $data->nombre; ?> </td>
			<td><?php echo $data->email; ?> </td>
			<td><?php echo $data->salario; ?> </td>
			<td><?php echo $data->puesto; ?> </td>
			<td><?php echo $data->fecha_contratacion; ?> </td>
			<td><?php echo $data->departamento; ?> </td>
			<td><?php echo $data->role; ?> </td>
			<td>
			  <div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			    Seleccionar <span class="caret"></span></button>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="#" onclick="ModalUpdate('<?php echo $data->id_empleado; ?>','<?php echo $data->nombre; ?>','<?php echo $data->email; ?>','<?php echo $data->salario; ?> ','<?php echo $data->puesto; ?> ','<?php echo $data->id_departamento; ?> ','<?php echo $data->id_role; ?> ');">Actualizar</a></li>
			      <li><a href="#" onclick="borrarEmpleado('<?php echo $data->id_empleado; ?>');">Borrar</a></li>
			    </ul>
			  </div>
			</td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	
	<?php	
    }
    
	function borrarEmpleado(){		
			parent::set_borrar_empleado($_REQUEST['id_empleado']);		
    }

	function registrarEmpleado(){
		$data = array(
					'nombre' 		=> $_REQUEST['nombre'],
					'email' => $_REQUEST['email'],
					'salario'		=> $_REQUEST['salario'],
					'puesto'		=> $_REQUEST['puesto'],
					'departamento'		=> $_REQUEST['departamento'],
					'role'		=> $_REQUEST['role']
					);		
					parent::set_registrar_empleados($data);		
    }    
    
	function actualizarEmpleado(){
		$data = array(
					'id_empleado'		=> $_REQUEST['id_empleado'],
					'nombre' 		=> $_REQUEST['nombre'],
					'email' => $_REQUEST['email'],
					'salario' => $_REQUEST['salario'],
					'puesto'		=> $_REQUEST['puesto'],
					'departamento'		=> $_REQUEST['departamento'],
					'role'		=> $_REQUEST['role']
					);		
			parent::set_actualizar_empleado($data);		
	}    
    
}

//Al enviar el formulario, se hace una solicitud a empleadoController.php. Este controlador procesa la solicitud y determina qué acción realizar (crear, leer, actualizar o eliminar un empleado).