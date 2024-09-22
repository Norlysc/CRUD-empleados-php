<?php

class Empleado extends db{
	
	private function view_empleados(){
		try {
			$SQL = "SELECT ee.id_empleado, ee.nombre, ee.email, ee.salario, ee.puesto, ee.fecha_contratacion, dd.nombre as departamento, rr.role, dd.id_departamento, rr.id_role FROM empleados ee join departamento dd on ee.fk_id_departamento = dd.id_departamento join roles rr on ee.fk_id_role=rr.id_role";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die('Error Empleado(view_empleados) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function get_view_empleados(){
		return $this->view_empleados();
	}

	private function registrar_empleados($data){
		try {
			echo $data;
			$SQL = 'INSERT INTO empleados (nombre,email,salario,puesto,fk_id_departamento,fk_id_role) VALUES (?,?,?,?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									$data['nombre'],
									$data['email'],
									$data['salario'],
									$data['puesto'],
									$data['departamento'],
									$data['role']
									)
							);			
		} catch (Exception $e) {
			die('Error Empleado(register_empleados) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_registrar_empleados($data){
		$this->registrar_empleados($data);
	}

	private function actualizar_empleado($data){
		try {
			$SQL = 'UPDATE empleados SET nombre = ?, email = ?, salario = ?, puesto = ?, fk_id_departamento = ?, fk_id_role = ? WHERE id_empleado = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									$data['nombre'],
									$data['email'],
									$data['salario'],
									$data['puesto'],
									$data['departamento'],
									$data['role'],
									$data['id_empleado']
									)
							);			
		} catch (Exception $e) {
			die('Error Empleado(update_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_actualizar_empleado($data){
		$this->actualizar_empleado($data);
	}

	private function borrar_empleado($id_empleado){
		try {
			$SQL = 'DELETE FROM empleados WHERE id_empleado = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id_empleado));			
		} catch (Exception $e) {
			die('Error Empleado(Borrar Empleado) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_borrar_empleado($id_empleado){
		$this->borrar_empleado($id_empleado);
	}	
}
?>

<!--La clase Empleado  gestiona las operaciones relacionadas con los empleados en el sistema CRUD. Hereda de la clase db para acceder a la base de datos y proporciona métodos para:
Ver empleados: Recuperar la lista de empleados junto con sus detalles.
Registrar empleados: Añadir nuevos registros de empleados a la base de datos.
Actualizar empleados: Modificar la información de empleados existentes.
Eliminar empleados: Borrar registros de empleados de la base de datos.-->