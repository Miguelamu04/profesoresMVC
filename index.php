<?php
require_once "controlador/ProfesorControlador.php";

$objControlador = new ProfesorControlador();

if (isset($_GET['accion'])){
    $accion = $_GET['accion'];
}
else{
    $accion = "listar";
}

$datos = $objControlador->$accion();

require_once "vistas/" . $objControlador->nombreVista . ".php";
?>
