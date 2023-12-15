<?php
class VeiculoPasseio extends Veiculo{

    public function __construct($modelo, $cor, $ano, $combustivel){
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
        $this->combustivel = $combustivel;
    }

    public function setVeiculoPasseio($ano, $combustivel){
        echo <<<HTML
        <p>echo "Ano: {$this->ano}"</p>
        <p>echo "Combustível: {$this->combustivel}"</p>>
        HTML;
    }
}
?>