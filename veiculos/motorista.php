<?php
require "Veiculo.php";

"<h2>Veículo de Passeio</h2>";
$passeio = new VeiculoPasseio("Fastback","laranja",2023,"gasolina");
$passeio->getVeiculo();
$passeio->setVeiculoPasseio();
$passeio->andar(88);

?>