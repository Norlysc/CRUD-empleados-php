<?php

class db{	
	protected function connect(){
		try {
			$connect = new PDO('mysql:host=localhost;dbname=crud;charset=utf8;','root','');
			$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $connect;	
		} catch (Exception $e) {
			die('Error db(connect) '.$e->getMessage());
		}
	}
}
?>

<!--Me Establece una conexión con la base de datos MySQL. Utiliza PDO (PHP Data Objects) para manejar la conexión, permitiendo un acceso seguro y eficiente a la base de datos llamada crud-->

