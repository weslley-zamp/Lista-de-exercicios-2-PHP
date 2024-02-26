<?php
// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.

trait Mensagens{
    public function registrarMensagem($mensagem){
        echo "Registrando mensagem: $mensagem";
    }
}

class EmailSender{
    use Mensagens;
    private $condicao;
    public function enviaMensagem($condicao){
        if($condicao === true)
        {
            $this->registrarMensagem("Email enviado com sucesso.");
        }
        else
        {
            $this->registrarMensagem("Email não foi enviado.");
        }
    }
}
class SmsSender{
    use Mensagens;
    private $condicao;
    public function enviarSms($condicao){
        if ($condicao === true){
            $this->registrarMensagem("SMS enviado com sucesso.");
        }
        else{
            $this->registrarMensagem("SMS não foi enviado por problemas.");
        }
    }
}

$email = new EmailSender();
$sms = new SmsSender();

$email->enviaMensagem(false);
echo "<br/>";
$sms->enviarSms(true);
?>