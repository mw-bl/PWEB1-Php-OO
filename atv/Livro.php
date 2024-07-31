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

    // Getter Titulo
    public function getTitulo() {
        return $this -> titulo;
    }

    // Getter Ano
    public function getAno() {
        return $this -> ano;
    }

    // Getter Autor
    public function getAutor() {
        return $this -> autor;
    }
}

?>