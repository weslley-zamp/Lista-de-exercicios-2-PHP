<?php
// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade' protegidas e utilize métodos getters e setters para acessá-las e modificá-las.
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
    public function setNome($novoNome){
        return $this->nome = $novoNome;
    }
}
$animal1 = new Cachorro("Zé gotinha", 7);

echo "O nome do animal é: ". $animal1->getNome(). "<br/>";
echo "A idade desse animal é: ". $animal1->getIdade(). "<br/>";

//Metódos modificados
$animal2 = new Cachorro("Pinchinha", 9);

echo "O nome do animal modificado é: ". $animal2->getNome(). "<br/>";
echo "A idade do animal modificado é: ". $animal2->getIdade(). "<br/>";
?>