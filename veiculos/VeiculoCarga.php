<?php
class VeiculoCarga extends Veiculo{

    public function __construct($modelo, $cor, $tipo,$porte,$eixos,$velocidade){
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->tipo = $tipo;
        $this->porte = $porte;
        $this->eixos = $eixos;
        $this->velocidade = $velocidade;
    }

    public function setVeiculoCarga($tipo, $porte, $eixos){
        echo <<<HTML
        <p>echo "Tipo: {$this->tipo}"</p>
        <p>echo "Porte: {$this->porte}"</p>
        <p>echo "Quantidade de Eixos: {$this->eixos}"</p>
        HTML;
    }
}
?>