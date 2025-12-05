<?php
require_once "Controlador/ProfesorControlador.php";

$controlador = new ProfesorControlador();

if (isset($_POST['confirmar'])) {
    $datos = $controlador->eliminar();
    include "Vistas/listarProfesores.php";
} else {
    $datos = $controlador->confirmarEliminar();
    include "Vistas/confirmarEliminar.php";
}
