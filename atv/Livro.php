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

    // Getter/Setter Titulo
    public function getTitulo() {
        return $this -> titulo;
    }
    public function setTitulo($titulo) {
        $this -> titulo = $titulo;
    }

    // Getter/Setter Ano
    public function getAno() {
        return $this -> ano;
    }
    public function setAno($ano) {
        $this -> ano = $ano;
    }

    // Getter/Setter Autor
    public function getAutor() {
        return $this -> autor;
    }
    public function setAutor($autor) {
        $this -> autor = $autor;
    }
}

?>