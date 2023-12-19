<?php
class VeiculoPasseio extends Veiculo{

    public $modelo, $cor, $ano, $combustivel, $velocidade;

    public function __construct($modelo, $cor, $ano, $combustivel, $velocidade){
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
        $this->combustivel = $combustivel;
        $this->velocidade = $velocidade;
    }

    public function setVeiculoPasseio($ano, $combustivel){
        echo <<<HTML
        <p>echo "Ano: {$this->ano}"</p>
        <p>echo "Combustível: {$this->combustivel}"</p>>
        HTML;
    }

}
?>