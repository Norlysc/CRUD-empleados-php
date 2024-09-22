

# CRUD de Empleados
- Este proyecto es un CRUD (Crear, Leer, Actualizar, Eliminar) de empleados desarrollado en PHP utilizando el framework Bootstrap para el diseño responsivo. El proyecto sigue el patrón de diseño MVC (Modelo Vista Controlador) y cumple con las peticiones POST y GET requeridas para el manejo de datos de los empleados.
- El sistema está completamente funcional y utiliza diversas sentencias SQL avanzadas como JOINs para realizar consultas eficientes en la base de datos.

# Características
- Gestión de empleados: Permite crear, leer, actualizar y eliminar registros de empleados.
 
- Patrón MVC: Organización del código siguiendo el patrón Modelo-Vista-Controlador para facilitar el mantenimiento y escalabilidad del proyecto.
 
- Bootstrap: Diseño y responsive 
 
- SQL: Consultas que incluyen JOINs,.

- Compatibilidad con POST y GET: Cumple con los estándares para manejar solicitudes HTTP, asegurando que las interacciones con el servidor se realicen correctamente.

# 📧Requisitos
- Antes de ejecutar este proyecto, asegúrate de tener lo siguiente instalado:

➡️Servidor web: Apache, Nginx, o cualquier servidor que soporte PHP.
PHP: Versión 7.4 o superior.
Base de datos MySQL: Necesitarás una base de datos MySQL donde se almacenarán los datos de los empleados.
Composer: Para la gestión de dependencias de PHP (opcional).
Bootstrap: Para la parte del diseño responsivo (ya incluido en el proyecto).

# Clonar el repositorio:

➡️Para clonar este repositorio, ejecuta el siguiente comando en tu terminal:

➡️git clone `https://github.com/Norlysc/CRUD-empleados-php.git`

# Configuración del entorno

Para ejecutar este proyecto de CRUD de empleados, sigue estos pasos:

1. **Instalación de XAMPP**:
   - Asegúrate de tener instalado XAMPP en tu computadora. Puedes descargarlo desde `(https://www.apachefriends.org/index.html)`.

2. **Iniciar XAMPP**:
   - Abre el panel de control de XAMPP y asegúrate de que los servicios de **Apache** y **MySQL** estén en funcionamiento. Puedes hacerlo haciendo clic en el botón "Start" junto a cada uno de ellos.

3. **Crear la Base de Datos**:
   - Abre `phpMyAdmin` en tu navegador, accediendo a `http://localhost/phpmyadmin`.
   - Crea una nueva base de datos con el nombre **nombre_de_tu_base_de_datos** (sustitúyelo por el nombre que prefieras).
   - Una vez creada la base de datos, selecciona la base de datos y haz clic en la pestaña "SQL".
   - Copia y pega el script ➡️ `SQLDB/crud.sql` de creación de tablas y datos que se encuentra en el proyecto , y haz clic en "Ejecutar".

4. **Ubicación del Proyecto**:
   - Copia la carpeta del proyecto y pégala en la carpeta `htdocs` de tu instalación de XAMPP. La ruta normalmente será `C:\xampp\htdocs\nombre_de_tu_carpeta`.

5. **Acceso al Proyecto**:
   - Abre tu navegador y escribe en la barra de direcciones `http://localhost/CRUD-master_Norlys/`. Esto abrirá la aplicación CRUD de empleados.

6. **Finalización**:
   - Sigue las instrucciones de uso de la aplicación para comenzar a gestionar los empleados.

### Nota
- Asegúrate de tener los permisos adecuados para ejecutar los scripts de base de datos y que tu instalación de XAMPP esté correctamente configurada.

# 💻Funcionalidades
➕ **Crear empleados:** Formulario para agregar nuevos empleados a la base de datos.
👤 **Ver empleados:** Listado de todos los empleados registrados, con detalles importantes como nombre, email, salario, puesto y departamento.
🔄 **Actualizar empleados:** Modificación de los datos de un empleado existente.
🗑️ **Eliminar empleados:** Opción para eliminar el registro de un empleado de la base de datos.


# Estructura del Proyecto
➡️Modelo: Interactúa directamente con la base de datos (MySQL) y maneja la lógica de las sentencias SQL.

➡️Vista: Contiene los archivos que renderizan la interfaz de usuario (HTML, Bootstrap).

➡️Controlador: Maneja las peticiones del usuario y las redirige al modelo o a la vista según sea necesario.

# 🗄️ Consultas SQL
El proyecto utiliza consultas SQL  para optimizar la interacción con la base de datos. Algunas de las consultas incluyen:

✅ **JOIN:** Para unir tablas relacionadas, como empleados con departamentos o roles.

✅ **INNER JOIN:** Para obtener datos que coinciden entre varias tablas.

✅ **LEFT JOIN:** Para obtener todos los registros de una tabla y los coincidentes de otra.

✅ **CASE:** Para manejar condiciones dentro de las consultas SQL, como asignar diferentes roles o estados a los empleados.

# Autor
👧Norlys Castañeda-ncastaneda30@gmail.com- `https://github.com/Norlysc`









