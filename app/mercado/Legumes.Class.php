<?php
namespace app\mercado;

class Legumes implements Lista{

    public $legumes = [];

    public $legume;

    public function setLegume($legume){
        return $this->legume = $legume;
    }

    public function adicionar()
    {
        if(isset($legume)){
            array_push($this->legumes, $this->setLegume($legume));
        }
    }

    public function editar($busca){
        $legume = array_search($busca, $this->legumes);
        if($legume !== false){
            array_splice($this->legumes, $legume,1);
        }
    }

    public function remover(){
        
        if(isset($legume)){
            array_pop($this->legumes);
        }
    }

}//TÉRMINO DA CLASSE
?>