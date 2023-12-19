<?php
namespace correio;
// classe abstrata
abstract class Logistica{

    // MÉTODOS ABSTRATOS

    // quem está enviando a remessa
    abstract protected function remetente();

    // lugar de origem da remessa
    abstract protected function origem();

    // lugar do destino da remessa conjuntamente com a distância
    abstract protected function destino();
    
    // prazo para entregar a remessa
    abstract protected function prazo();

    // pagamento pela entrega da remessa
    abstract protected function pagamento();

}
?>