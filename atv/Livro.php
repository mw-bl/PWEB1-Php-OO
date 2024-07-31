<?php

class Livro {
    private $titulo;
    private $ano;
    private $autor;

    public function __construct($titulo, $ano, $autor) {
        $this -> titulo = $titulo;
        $this -> ano = $ano;
        $this -> autor = $autor;
    }

    public function getTitulo() {
        return $this -> titulo;
    }
    public function setTitulo($titulo) {
        $this -> titulo = $titulo;
    }

    public function getAno() {
        return $this -> ano;
    }
    public function setAno($ano) {
        $this -> ano = $ano;
    }

    public function getAutor() {
        return $this -> autor;
    }
    public function setAutor($autor) {
        $this -> autor = $autor;
    }
}

?>