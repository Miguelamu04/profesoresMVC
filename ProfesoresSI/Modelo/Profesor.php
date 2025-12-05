<?php
require_once "configdb.php";

class Profesor{
    private $conexion;

    public function __construct(){
        // Conexión a la base de datos
        $this->conexion = new mysqli(SERVIDOR, USUARIO, CLAVE, NOMBRE_BD);
    }

    // Obtiene todos los registros de profesores
    public function obtenerProfesores(){
        $sql = "SELECT * FROM profesores";
        $resultado = $this->conexion->query($sql);
        return $resultado;
    }

    // Recupera un profesor según su id
    public function obtenerPorId($id){
        $stmt = $this->conexion->prepare("SELECT * FROM profesores WHERE idProfesor = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $fila = $resultado->fetch_assoc();
        $stmt->close();
        return $fila;
    }

    // Inserta un nuevo profesor en la base de datos
    public function insertar($nombre){
        $stmt = $this->conexion->prepare("INSERT INTO profesores (nombre) VALUES (?)");
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $stmt->close();
    }

    // Actualiza los datos de un profesor existente
    public function actualizar($id , $nombre){
        $stmt = $this->conexion->prepare("UPDATE profesores SET nombre = ? WHERE idProfesor = ?");
        $stmt->bind_param("si", $nombre, $id);
        $stmt->execute();
        $stmt->close();
    }

    // Elimina un profesor según su id
    public function eliminar($id){
        $stmt = $this->conexion->prepare("DELETE FROM profesores WHERE idProfesor = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}
