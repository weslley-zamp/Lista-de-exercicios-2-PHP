<?php
// Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
// Implemente um método construtor para inicializar essas propriedades.
// Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.

Class Livro{
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor){
        $this->titulo= $titulo;
        $this->autor= $autor;
    }   

    public function getTitulo(){
        return $this->titulo;
    }

    public function getAutor(){
        return $this->autor;
    }
}

$livro = new Livro("A volta dos que não foram","Weslley Zampier");

echo "Nome do Titulo: ". $livro->getTitulo(). "<br/>";
echo "Nome do Autor: ". $livro->getAutor(). "<br/>";
?>