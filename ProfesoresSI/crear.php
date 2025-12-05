<?php
require_once "Controlador/ProfesorControlador.php";

$controlador = new ProfesorControlador();

if (isset($_POST['nombre'])) {
    $datos = $controlador->crear();
    include "Vistas/listarProfesores.php";
} else {
    $controlador->mostrarCrear();
    include "Vistas/crearProfesor.php";
}
