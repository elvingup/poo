<?php
class VeiculoCorrida extends Veiculo{

    public function __construct($modelo,$cor,$tipo,$fabricante){
        $this->modelo =$modelo;
        $this->cor = $cor;
        $this->tipo = $tipo;
        $this->fabricante = $fabricante;
    }

    public function setVeiculoCorrida($tipo, $fabricante){
        echo <<<HTML
        <p>echo "Tipo: {$this->tipo}"</p>
        <p>echo "Fabricante: {$this->fabricante}"</p>>
        HTML;
    }
}
?>