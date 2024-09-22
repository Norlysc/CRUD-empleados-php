function objectAjax() {
  var xmlhttp = false;
  try {
    xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (e) {
    try {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (E) {
      xmlhttp = false;
    }
  }
  if (!xmlhttp && typeof XMLHttpRequest != "undefined") {
    xmlhttp = new XMLHttpRequest();
  }
  return xmlhttp;
}
//Inicializo automaticamente la funcion read al entrar a la pagina o recargar la pagina;
addEventListener("load", leerEmpleados, false);

function leerEmpleados() {
  $.ajax({
    type: "POST",
    url: "?c=empleado&m=table_empleados",
    beforeSend: function () {
      $("#information").html("Procesando, espere por favor...");
    },
    success: function (response) {
      $("#information").html(response);
    },
  });
}

function registrar() {
  nombre = document.formEmpleado.nombre.value;
  email = document.formEmpleado.email.value;
  salario = document.formEmpleado.salario.value;
  puesto = document.formEmpleado.puesto.value;
  console.log("registrar" + document.formEmpleado.departamento.value);
  departamento = document.formEmpleado.departamento.value;
  console.log("registrar" + document.formEmpleado.role.value);
  role = document.formEmpleado.role.value;
  ajax = objectAjax();
  ajax.open("POST", "?c=empleado&m=registrarEmpleado", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      leerEmpleados();
      alert("Los datos guardaron correctamente.");
      $("#agregarEmpleado").modal("hide");
    }
  };
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajax.send(
    "nombre=" +
      nombre +
      "&email=" +
      email +
      "&puesto=" +
      puesto +
      "&salario=" +
      salario +
      "&departamento=" +
      departamento +
      "&role=" +
      role
  );
}

function actualizar() {
  console.log("actualizar");
  id_empleado = document.formEmpleadoActualizar.id_empleado.value;
  nombre = document.formEmpleadoActualizar.nombre.value;
  email = document.formEmpleadoActualizar.email.value;
  salario = document.formEmpleadoActualizar.salario.value;
  puesto = document.formEmpleadoActualizar.puesto.value;
  console.log("actu" + document.formEmpleado.departamento.value);
  departamento = document.formEmpleadoActualizar.departamento.value;
  console.log("actu" + document.formEmpleado.role.value);
  role = document.formEmpleadoActualizar.role.value;
  console.log("sal" + salario);
  ajax = objectAjax();
  ajax.open("POST", "?c=empleado&m=actualizarEmpleado", true);
  ajax.onreadystatechange = function () {
    if (ajax.readyState == 4) {
      leerEmpleados();
      $("#actualizarEmpleado").modal("hide");
    }
  };
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  ajax.send(
    "nombre=" +
      nombre +
      "&email=" +
      email +
      "&puesto=" +
      puesto +
      "&id_empleado=" +
      id_empleado +
      "&salario=" +
      salario +
      "&departamento=" +
      departamento +
      "&role=" +
      role
  );
}

function borrarEmpleado(id_empleado) {
  if (confirm("¿Esta seguro de eliminar este registro?")) {
    ajax = objectAjax();
    ajax.open("POST", "?c=empleado&m=borrarEmpleado", true);
    ajax.onreadystatechange = function () {
      if (ajax.readyState == 4) {
        leerEmpleados();
      }
    };
    ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    ajax.send("id_empleado=" + id_empleado);
  }
}

function ModalRegistrar() {
  $("#agregarEmpleado").modal("show");
}

function ModalUpdate(
  id_empleado,
  nombre,
  email,
  salario,
  puesto,
  departamento,
  role
) {
  console.log("departamento " + departamento);
  console.log("role " + role);
  document.formEmpleadoActualizar.id_empleado.value = id_empleado;
  document.formEmpleadoActualizar.nombre.value = nombre;
  document.formEmpleadoActualizar.email.value = email;
  document.formEmpleadoActualizar.salario.value = salario;
  document.formEmpleadoActualizar.puesto.value = puesto;
  document.formEmpleadoActualizar.departamento.value = departamento.trim();
  document.formEmpleadoActualizar.role.value = role.trim();
  $("#actualizarEmpleado").modal("show");
}

