<?php
require_once "Controlador/ProfesorControlador.php";

$objControlador = new ProfesorControlador();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"])) {
    $datos = $objControlador->editar();
    include "vistas/listarProfesores.php";
} else {
    $datos = $objControlador->mostrarEditar();
    include "vistas/modificarProfesor.php";
}
?>
