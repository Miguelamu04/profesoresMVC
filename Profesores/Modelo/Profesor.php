<?php
require_once "configdb.php";

class Profesor{

    private $conexion;

    public function __construct(){
        // Establece la conexión a la base de datos al crear un objeto de esta clase
        $this->conexion = new mysqli(SERVIDOR, USUARIO, CLAVE, NOMBRE_BD);
    }

    // Obtiene todos los registros de profesores en la base de datos
    public function obtenerProfesores(){
        $sql = "SELECT * FROM profesores";
        $resultado = $this->conexion->query($sql);
        $datos = $resultado->fetch_all(MYSQLI_ASSOC);
        return $datos; // Devuelve array con todos los profesores
    }

    // Obtiene un profesor por su ID
    public function obtenerPorId($id){
        $sql = "SELECT * FROM profesores WHERE idProfesor = $id";
        $resultado = $this->conexion->query($sql);
        $fila = $resultado->fetch_assoc();
        return $fila; // Devuelve los datos del profesor encontrado
    }

    // Inserta un nuevo profesor en la base de datos
    public function insertar($nombre){
        $sql = "INSERT INTO profesores (nombre) VALUES ('$nombre')";
        $this->conexion->query($sql);
    }

    // Actualiza los datos de un profesor existente
    public function actualizar($id , $nombre){
        $sql = "UPDATE profesores SET nombre = '$nombre' WHERE idProfesor = $id";
        $this->conexion->query($sql);
    }

    // Elimina un profesor según su ID
    public function eliminar($id){
        $sql = "DELETE FROM profesores WHERE idProfesor = $id";
        $this->conexion->query($sql);
    }
}
