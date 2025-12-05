<?php
require_once "Modelo/Profesor.php";

class ProfesorControlador{

    public $nombreVista;
    private $modelo;
    public $datos;

    public function __construct(){
        $this->modelo = new Profesor();
    }

    // Lista todos los profesores
    public function listar() {
        $this->nombreVista = "listarProfesores";
        return $this->datos = $this->modelo->obtenerProfesores();
    }

    // Muestra el formulario para crear un profesor
    public function mostrarCrear(){
        $this->nombreVista = "crearProfesor";
    }

    // Inserta un nuevo profesor y redirige a la lista
    public function crear(){
        $nombre = $_POST['nombre'];
        $this->modelo->insertar($nombre);

        header("Location: index.php?c=ProfesorControlador&m=listar");
    }

    // Muestra los datos del profesor seleccionado para editarlos
    public function mostrarEditar(){
        $id = $_GET['id'];
        $profesor = $this->modelo->obtenerPorId($id);
        $this->nombreVista = "modificarProfesor";
        return $profesor;
    }

    // Actualiza los datos del profesor y redirige a la lista
    public function editar(){
        $id = $_POST['idProfesor'];
        $nombre = $_POST['nombre'];
        $this->modelo->actualizar($id , $nombre);

        header("Location: index.php?c=ProfesorControlador&m=listar");
    }

    // Elimina un profesor y redirige a la lista
    public function eliminar(){
        $id = $_GET['id'];
        $this->modelo->eliminar($id);

        header("Location: index.php?c=ProfesorControlador&m=listar");
    }

    // Muestra la confirmación de eliminación del profesor seleccionado
    public function confirmarEliminar(){
        $id = $_GET['id']; 
        $profesor = $this->modelo->obtenerPorId($id);
        $datos = [
            "id" => $profesor['idProfesor'],
            "nombre" => $profesor['nombre'] 
        ];
        $this->nombreVista = "confirmarEliminar";
        return $datos;
    }
}
