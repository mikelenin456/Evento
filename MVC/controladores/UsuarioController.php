<?php

require_once "modelos/Usuario.php";

class UsuarioController{
    public function mostrar(){
        $usuario = new Usuario();
        return $usuario->mostrar();
    }
}