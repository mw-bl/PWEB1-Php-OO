<?php

class Usuario extends Pessoa {
    private $idUsuario;
    private $senha;

    public function __construct($idUsuario, $senha) {
        $this -> idUsuario = $idUsuario;
        $this -> senha = $senha;
    }

    public function getIdUsuario() {
        return $this -> idUsuario;
    }
    public function setIdUsuario($idUsuario) {
        $this -> idUsuario = $idUsuario;
    }

    public function getSenha() {
        return $this -> senha;
    }
    public function setSenha($senha) {
        $this -> senha = $senha;
    }
}

?>