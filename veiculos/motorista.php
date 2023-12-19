<?php
require "Veiculo.php"; require "VeiculoPasseio.php";
require"VeiculoCorrida.php"; require"VeiculoCarga.php";


echo "<h2 style='background-color:orange'>Veículo de Passeio</h2>";
$passeio = new VeiculoPasseio("Fastback","laranja",2023,"gasolina",50);
$passeio->getVeiculo("Fastback","laranja");
$passeio->setVeiculoPasseio(2023,"gasolina");
$passeio->andar(50);

"<br>";

echo "<h2 style='background-color:yellow'>Veículo de Corrida</h2>";
$corrida = new VeiculoCorrida("F-40","Vermelha", "Supersport","Ferrari",300);
$corrida->getVeiculo("F-40","Vermelha");
$corrida->setVeiculoCorrida("Supersport","Ferrari");
$corrida->andar(300);

"<br>";

echo "<h2 style='background-color:#ddd'>Veículo de Carga</h2>";
$carga = new VeiculoCarga("FH 540","Aço","carreta","veiculo longo",11,44);
$carga->getVeiculo("FH540","Aço");
$carga->setVeiculoCarga("carreta","veiculo longo",11);
$carga->andar(44);

?>