<?php
require_once "Controlador/ProfesorControlador.php";
$objControlador = new ProfesorControlador();

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["confirmar"])) {
    $datos = $objControlador->eliminar();
    include "vistas/listarProfesores.php";
}else{
    $datos = $objControlador->confirmarEliminar();
    include "vistas/confirmarEliminar.php";
}
?>
