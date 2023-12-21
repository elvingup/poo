<?php
namespace correio\transportadora;

use correio\Logistica;

class Transportadora extends Logistica{

    // ATRIBUTOS
    public $remetente, $origem, $destino, $prazo, $pagamento,
    $distancia, $rapido, $fator
    ;

    // IMPLEMENTAÇÃO DOS ABSTRATOS

    public function __construct(){
        $this->remetente();
        $this->origem();
        $this->destino();
        $this->prazo();
        $this->pagamento();
    }

    protected function remetente(){
        return $this->remetente;
    }

    protected function origem() {
        return $this->origem;
    }

    protected function destino() {
        return $this->destino;
    }
    
    protected function prazo(){
        return $this->prazo;
    }

    protected function pagamento(){
        return $this->pagamento;
    }

    // MÉTODOS 

    public function setRemetente($remetente){
        $this->remetente = $remetente;
    }
    public function getRemetente(){
        return $this->remetente;
    }

    public function setOrigem($origem){
        $this->origem = $origem;
    }
    public function getOrigem(){
        return $this->origem;
    }

    public function setDestino($destino){
        $this->destino = $destino;
    }
    public function getDestino(){
        return $this->destino;
    }

    public function setDistancia($distancia){
        
        echo "Origem: {getOrigem()}";
        echo "Destino: {getDestino()}";

        $this->distancia = $distancia; 
    }
    public function getDistancia(){
        return $this->distancia;
    }

    public function setPrazo($prazo, $rapido, $fator){

        echo "Distância: {getDistancia()}";
        echo $rapido;
        echo $fator;

        if($rapido == false){
            $this->prazo = $prazo;
        }else{
            $this->prazo = $prazo*$fator;
        }        
    }
    public function getPrazo(){
        return $this->prazo;
    }

    public function setPagamento($pagamento){
        
        echo "Distância: {getDistancia()}";
        
        echo "Prazo: {getPrazo()}";

        $this->pagamento = $pagamento;
    }
    public function getPagamento(){
        return $this->pagamento;
    }

    public function boletim(){
        echo "
        Remetente: {$this->getRemetente()} 
        Origem: {$this->getOrigem()}
        Destino: {$this->getDestino()} 
        Distância: {$this->getDistancia()} km 
        Prazo: {$this->getPrazo()} dias
        Pagamento: R$ {$this->getPagamento()} 
        ";
    }
    
// TERMO DA CLASSE
}
?>