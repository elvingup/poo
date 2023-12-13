<!-- 
    CRIA UMA CLASSE DE CONTA BANCARIA ONDE TERA O NOME DO CLIENTE, NUMERO DA CONTA E SALDO

EFETUE METODOS PARA REALIZAR DEPOSITO E SAQUE E EXIBIÇÃO DO SALDO

NO SAQUE, VALIDE SE O SALDO É SUFICIENTE PARA SACAR 
NO DEPOSITO VALIDE SE O VALOR A SER DEPOSITADO É > 0
 -->

<?php
class Contabancaria{

    // atributos
    public $saldo = 999;
    
    public function getSaldo() {
        return $this->saldo;
    }
    
    public function depositar($amount) {
        $this->saldo += $amount;
    }
    
    public function sacar( $amount ) {
        $this->saldo -= $amount;
    }
}

$grana = new Contabancaria();
echo $grana->getSaldo()."<br>";
$grana->depositar(222);
echo $grana->getSaldo()."<br>";
$grana->sacar(88);
echo $grana->getSaldo()."<br>";

?>

<!-- 
    
   localhost\Entra21ed2023php\poo\Contabancaria.php
 -->