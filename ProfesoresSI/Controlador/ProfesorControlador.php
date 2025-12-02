<?php
require_once "Modelo/Profesor.php";

class ProfesorControlador{
    public $nombreVista;
    private $modelo;

    public function __construct(){
        $this->modelo = new Profesor();
    }

    public function listar() {
        $resultado = $this->modelo->obtenerProfesores();
        $datos = [];
        while ($fila = $resultado->fetch_assoc()) {
            $datos[] = $fila;
        }
        $this->nombreVista = "listarProfesores";
        return $datos;
    }

    public function mostrarCrear(){
        $this->nombreVista = "crearProfesor";
    }

    public function crear(){
        $nombre = $_POST['nombre'];
        $this->modelo->insertar($nombre);
        return $this->listar();
    }

    public function mostrarEditar(){
        $id = $_POST['id'];
        $profesor = $this->modelo->obtenerPorId($id);
        $this->nombreVista = "modificarProfesor";
        return $profesor;
    }

    public function editar(){
        $id = $_POST['idProfesor'];
        $nombre = $_POST['nombre'];
        $this->modelo->actualizar($id , $nombre);
        return $this->listar();
    }

    public function eliminar(){
        $id = $_POST['id'];
        $this->modelo->eliminar($id);
        return $this->listar();
    }

    public function confirmarEliminar(){
        $id = $_POST['id']; 
        $profesor = $this->modelo->obtenerPorId($id);
        $datos = [
            "id" => $profesor['idProfesor'],
            "nombre" => $profesor['nombre'] 
        ];
        $this->nombreVista = "confirmarEliminar";
        return $datos;
    }
}

