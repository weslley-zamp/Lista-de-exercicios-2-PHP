<?php
class Veiculo{
    protected $marca;
    protected $modelo;

    public function __construct($marca, $modelo){
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function exibirInformacoesGerais(){
        echo "Marca: {$this->marca} <br/> Modelo: {$this->modelo}";
    }
}

class Carro extends Veiculo{
    private $qtd_bancos;
    private $qtd_portas;

    public function __construct($marca, $modelo, $qtd_bancos, $qtd_portas){
        parent::__construct($marca, $modelo);
        $this->qtd_bancos = $qtd_bancos;
        $this->qtd_portas = $qtd_portas;
    }

    public function getBancos(){
        return $this->qtd_bancos;
    }

    public function getPortas(){
        return $this->qtd_portas;
    }

    public function exibirQuantidades(){
        echo "A quantidade de bancos é: {$this->qtd_bancos} <br/> A quantidade de portas é: {$this->qtd_portas}";
    }
}

class Moto extends Veiculo{
    private $cilindradas;

    public function __construct($marca, $modelo, $cilindradas){
        parent::__construct($marca, $modelo);
        $this->cilindradas = $cilindradas;
    }

    public function exibirCilindradas(){
        echo "As cilindradas da moto são: {$this->cilindradas}";
    }
}

// Demonstração de polimorfismo
$carro = new Carro("FORD", "KA", 3, 2);
$moto = new Moto("Honda", "CBR600RR", 600);

echo "Informações do carro: ";
$carro->exibirInformacoesGerais(); 
echo "<br/>";
$carro->exibirQuantidades();
echo"<br/>";
echo"<hr/>";

echo "Informações da moto: ";
$moto->exibirInformacoesGerais();
echo "<br/>";
$moto->exibirCilindradas();
?>