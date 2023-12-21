<?php
namespace app\mercado;

class Adega implements Lista{

    public $bebidas = [];

    public $bebida;

    public function setBebida($bebida){
        return $this->bebida = $bebida;
    }

    public function adicionar()
    {
        if(isset($bebida)){
            array_push($this->bebidas, $this->setBebida($bebida));
        }
    }

    public function editar($busca){
        $bebida = array_search($busca, $this->bebidas);
        if($bebida !== false){
            array_splice($this->bebidas, $bebida,1);
        }
    }

    public function remover(){
        
        if(isset($bebida)){
            array_pop($this->bebidas);
        }
    }

}//TÉRMINO DA CLASSE
?>