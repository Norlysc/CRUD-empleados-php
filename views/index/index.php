<div class="container">
	<div class="row">
		<div class="col-md-12">
			<center><h1>CRUD - EMPLEADOS - MVC</h1></center>
			<br>			
			<center>
            <button type="button" onclick="ModalRegistrar();" class="btn btn-success">
			<i class="bi bi-plus-circle"></i> Agregar empleado
            </button>
            </center>
			<br>
		<div id="information">
			<button onclick="leerEmpleados();"></button>
		</div>			
		</div>
	</div>
</div>

<!-- Este bloque crea un contenedor principal que incluye un encabezado centrado con el título "CRUD - EMPLEADOS - MVC". También proporciona un botón para agregar un nuevo empleado que abre un modal al hacer clic. El div con el id "information" se utiliza para mostrar información dinámica, como la lista de empleados, y contiene un botón que llama a la función `leerEmpleados()` para cargar los datos de los empleados. -->