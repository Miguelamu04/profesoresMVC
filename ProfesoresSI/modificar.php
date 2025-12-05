<?php
require_once "Controlador/ProfesorControlador.php";

$controlador = new ProfesorControlador();

if (isset($_POST['nombre'])) {
    $datos = $controlador->editar();
    include "Vistas/listarProfesores.php";
} else {
    $datos = $controlador->mostrarEditar();
    include "Vistas/modificarProfesor.php";
}
