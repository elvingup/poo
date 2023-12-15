<!-- //20231214 Exercício para praticar classes
    Veiculo é extendido por Passeio, Carga e Corrida

Instrutor PHP Entra21 202319:45
ESCREVA UMA CLASSE PARA VEICULOS E 3 CLASSES FILHAS QUE TERÃO

1. VEICULO DE PASSEIO
2. VEÍCULO DE CARGA
3. VEÍCULO DE CORRIDA

OBSERVE CARACTERISTICAS DE CADA TIPO DE VEÍCULO
-->

<?php
class Veiculo{
    public $modelo,
    $fabricante,
    $tipo,
    $eixos,
    $portas,
    $cor,
    $ano,
    $combustivel,
    $porte,
    $velocidade;

    public function andar($velocidade){
        echo "Andando a {$this->velocidade} km/h<br>";
    }

    public function getVeiculo($modelo, $cor){
        echo <<<HTML
        <p>echo "Modelo: {$this->modelo}"</p>
        <p>echo "Cor: {$this->cor}"</p>
        HTML;
    }
}
?>