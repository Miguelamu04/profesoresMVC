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
        $sql = "SELECT * FROM profesores WHERE idProfesor = $id";
        $resultado = $this->conexion->query($sql);
        $fila = $resultado->fetch_assoc();
        return $fila;
    }

    public function insertar($nombre){
        $sql = "INSERT INTO profesores (nombre) VALUES ('$nombre')";
        $this->conexion->query($sql);
    }

    public function actualizar($id , $nombre){
        $sql = "UPDATE profesores SET nombre = '$nombre' WHERE idProfesor = $id";
        $this->conexion->query($sql);
    }

    public function eliminar($id){
        $sql = "DELETE FROM profesores WHERE idProfesor = $id";
        $this->conexion->query($sql);
    }
}
