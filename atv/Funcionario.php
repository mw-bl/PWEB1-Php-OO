<?php

class Funcionario extends Pessoa{
    private $idFuncionario;
    private $cargo;

    public function __construct($idFuncionario, $cargo) {
        $this -> idFuncionario = $idFuncionario;
        $this -> cargo = $cargo;
    }

    public function getIdFuncionario() {
        return $this -> idFuncionario;
    }
    public function setIdFuncionario($idFuncionario) {
        $this -> idFuncionario = $idFuncionario;
    }

    public function getCargo() {
        return $this -> cargo;
    }
    public function setCargo($cargo) {
        $this -> cargo = $cargo;
    }
}

?>