<?php
require_once "configdb.php";

class Profesor{
    private $conexion;

    public function __construct(){
        $this->conexion = new mysqli(SERVIDOR, USUARIO, CLAVE, NOMBRE_BD);
    }

    public function obtenerProfesores(){
        $sql = "SELECT * FROM profesores";
        $resultado = $this->conexion->query($sql);
        return $resultado;
    }

    public function obtenerPorId($id){
        $stmt = $this->conexion->prepare("SELECT * FROM profesores WHERE idProfesor = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $fila = $resultado->fetch_assoc();
        $stmt->close();
        return $fila;
    }

    public function insertar($nombre){
        $stmt = $this->conexion->prepare("INSERT INTO profesores (nombre) VALUES (?)");
        $stmt->bind_param("s", $nombre);
        $stmt->execute();
        $stmt->close();
    }

    public function actualizar($id , $nombre){
        $stmt = $this->conexion->prepare("UPDATE profesores SET nombre = ? WHERE idProfesor = ?");
        $stmt->bind_param("si", $nombre, $id);
        $stmt->execute();
        $stmt->close();
    }

    public function eliminar($id){
        $stmt = $this->conexion->prepare("DELETE FROM profesores WHERE idProfesor = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
}
