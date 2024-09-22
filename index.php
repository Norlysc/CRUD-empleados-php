<?php
require_once 'core/core.php';

$c = isset($_GET['c']) ? $_GET['c'] : 'empleado';
$m = isset($_GET['m']) ? $_GET['m'] : 'index';
$c .= 'Controller';

if(file_exists('controllers/' . $c . '.php')){
    require_once 'controllers/' . $c . '.php';
    if(method_exists($c, $m)){
        $c = new $c;
        call_user_func([$c,$m]);
    }else{
        die("Error : El metodo o funcion [{$m}()] no existe");
    }    
}else{
    die("Error : El controlador [{$c}] no existe.");
}


//Este archivo actúa como el enrutador principal de la aplicación. Se encarga de determinar qué controlador y método se deben invocar en función de los parámetros `c` controlador y `m` método pasados en la URL. Si no se especifican, utiliza valores predeterminados para cargar el controlador de empleados y el método índice. Verifica la existencia del controlador y método, y si todo es correcto, instancia el controlador y llama al método correspondiente. Si hay un error, se muestra un mensaje adecuado. 

