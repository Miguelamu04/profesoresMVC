<?php
require_once "Modelo/Profesor.php";

class ProfesorControlador{

    public $nombreVista;
    private $modelo;

    public function __construct(){
        $this->modelo = new Profesor();
    }

     //Método para obtener todos los profesores
    public function listar() {
        $resultado = $this->modelo->obtenerProfesores();
        $datos = [];
        while ($fila = $resultado->fetch_assoc()) {
            $datos[] = $fila;
        }
        $this->nombreVista = "listarProfesores";
        return $datos;
    }
    //Método para mostrar el formulario de creación
    public function mostrarCrear(){
        $this->nombreVista = "crearProfesor";
    }

    //Método para insertar un nuevo profesor en la BD
    public function crear(){
        $nombre = $_POST['nombre'];
        $this->modelo->insertar($nombre);

        return $this->listar();
    }

    //Método para mostrar el formulario de edición con los datos del profesor

    public function mostrarEditar(){
        $id = $_POST['id'];
        $profesor = $this->modelo->obtenerPorId($id);
        $this->nombreVista = "modificarProfesor";
        return $profesor;
    }

    //Método para actualizar un profesor en la BD

    public function editar(){
        $id = $_POST['idProfesor'];
        $nombre = $_POST['nombre'];
        $this->modelo->actualizar($id , $nombre);
        return $this->listar();
    }

    //Método para eliminar un profesor de la BD

    public function eliminar(){
        $id = $_POST['id'];
        $this->modelo->eliminar($id);
        return $this->listar();
    }
    //Método para obtener los datos del profesor antes de borrarlo
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
