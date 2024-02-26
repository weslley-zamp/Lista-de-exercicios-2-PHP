<?php
// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.

trait LogErro{
   private function registrarLogErro($erro){
        echo "Aconteceu o seguinte erro: $erro";
    }
}
trait LogInfo{
    private function registrarLogInfo($info){
        echo "A informação: $info, foi enviada com sucesso";
    }

}

class Registro{
    use LogErro;
    use LogInfo;

    private $condicao;

    public function enviarInformação($condicao){
        if($condicao === true){
            $this->registrarLogInfo("Nome");
        }
        else{
            $this->registrarLogErro("ERROR 404");
        }
    }
}

$registro = new Registro();
$registro->enviarInformação(false);
?>