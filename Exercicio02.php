<?php
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.
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

    public function setTitulo($novoTitulo){
        $this->titulo = $novoTitulo;
    }
    public function setAutor($novoAutor){
        $this->autor = $novoAutor;
    }
}

$livro = new Livro("A volta dos que não foram","Weslley Zampier");

echo "Nome do Titulo: ". $livro->getTitulo(). "<br/>";
echo "Nome do Autor: ". $livro->getAutor(). "<br/>";

//Modificando as propriedades

$livro->setTitulo("As longas tranças de um careca");
$livro->setAutor("Wesley Padilha");

echo "Nome do Titulo modificado: ".$livro->getTitulo(). "<br/>";
echo "Nome do Autor modificado: ". $livro->getAutor(). "<br/>";
?>
