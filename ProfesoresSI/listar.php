<?php
require_once 'Controlador/ProfesorControlador.php';

$objControlador = new ProfesorControlador();

$datos = $objControlador->listar();

include 'vistas/listarProfesores.php';
?>