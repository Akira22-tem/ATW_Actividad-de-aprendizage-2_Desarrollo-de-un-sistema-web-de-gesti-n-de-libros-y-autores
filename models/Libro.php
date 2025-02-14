<?php
class Libro {
    private $titulo;
    private $autor;
    private $precio;
    private $cantidad;

    // Constructor para crear un libro
    public function __construct($titulo, $autor, $precio, $cantidad) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }

    // Métodos getter
    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getCantidad() {
        return $this->cantidad;
    }

    // Métodos setter
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }
}
?>
