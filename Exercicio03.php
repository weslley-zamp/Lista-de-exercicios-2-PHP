<?php
// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.
Class Animal{
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
    public function setNome($novoNome){
        $this->nome = $novoNome;
    }
    public function setIdade($novoIdade){
        if($novaIdade >= 0){
            $this->idade = $novaIdade;
        }
        else{
            echo "Idade Inválida.";
        }
    }
} 
class Cachorro extends Animal{
    public function getIdade(){
         return $this->idade = $this->idade * 7;
    }
    public function setIdade($novaIdade){
        if($novaIdade >= 0){
            return $this->idade = $novaIdade * 7;
        }
        else{
            echo "Idade Inválida";
        }
    }
}
$animal1 = new Cachorro("Zé gotinha", 7);

echo "O nome do animal é: ". $animal1->getNome(). "<br/>";
echo "A idade desse animal é: ". $animal1->getIdade(). "<br/>";
?>