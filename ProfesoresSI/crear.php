<?php
require_once "Controlador/ProfesorControlador.php";

$objControlador = new ProfesorControlador();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $datos = $objControlador->crear();
    include "vistas/listarProfesores.php";
} else {
    $objControlador->mostrarCrear();
    include "vistas/crearProfesor.php";
}
?>
