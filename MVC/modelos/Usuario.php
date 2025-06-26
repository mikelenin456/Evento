<?php

require_once "Conn.php";

class Usuario{
    private $username;
    private $password;
    private $apellidos;
    private $nombres;
    private $tipo;
    private $id_escuela;
    private $email;

    public function __construct(){
    /*    $this->username = $username;
        $this->password = $password;
        $this->apellidos = $apellidos;
        $this->nombres = $nombres;
        $this->tipo = $tipo;
        $this->id_escuela = $id_escuela;
        $this->email = $email; */
    }

    public function mostrar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM usuario";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
    }
}