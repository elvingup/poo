<?php
class VeiculoCarga extends Veiculo{

    public function VeiculoCarga($modelo, $cor, $tipo,$porte,$eixos){
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->tipo = $tipo;
        $this->porte = $porte;
        $this->eixos = $eixos;
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