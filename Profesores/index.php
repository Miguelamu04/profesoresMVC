<?php
    require_once 'rutas.php';

    if(!isset($_GET['c'])) $_GET['c'] = CONTROLADOR_USUARIO;
    
    if(!isset($_GET['m'])) $_GET['m'] = METODO_PREDETERMINADO;

    $rutaControlador = RUTA_CONTROLADORES . $_GET['c'] . '.php';
    require_once $rutaControlador;

    $controlador = $_GET['c'];
    $objControlador = new $controlador();

    $datos = [];

    if(method_exists($objControlador, $_GET['m'])){
        $datos = $objControlador->{$_GET['m']}(); 
    }

    if($objControlador->nombreVista != ''){
        require_once RUTA_VISTAS . $objControlador->nombreVista . '.php';
    }
?>
