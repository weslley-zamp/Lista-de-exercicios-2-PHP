<?php
// Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Animal{
    protected $nome;
    protected $idade;

    public function __construct($nome,$idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setIdade($nova_idade){
        if($nova_idade >= 0){
            $this->idade = $nova_idade;
        }
        else{
            echo "Idade inválida";
        }
    }
    public function setNome($novo_nome){
        $this->nome = $novo_nome;
    }

    public function emitirSom(){
       echo "Som qualquer. ";
    }
}
class Cachorro extends Animal{
    public function emitirSom(){
        echo "O cachorro faz: AU AU! <br/>";
    }

}
class Gato extends Animal{
    public function emitirSom(){
        echo "O gato faz: MIAU! <br/>";
    }
}
$gato = new Gato("Jorge", 14);
$cachorro = new Cachorro("Bagre",10);

echo "O gato se chama: ". $gato->getNome(). ", sua idade é: ". $gato->getIdade(). "<br/>";
$gato->emitirSom();
echo "<br/> <hr/> <br/>";
echo "O cachorro se chama: ". $cachorro->getNome(). ", sua idade é: ".$cachorro->getIdade(). "<br/>";
$cachorro ->emitirSom();
?>