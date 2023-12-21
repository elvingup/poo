<?php
namespace app\mercado;

class Frutas implements Lista{

    public $frutas = [];

    public $fruta;

    public function setFruta($fruta){
        return $this->fruta = $fruta;
    }

    public function adicionar()
    {
        if(isset($fruta)){
            array_push($this->frutas, $this->setFruta($fruta));
        }
    }

    public function editar($busca){
        $fruta = array_search($busca, $this->frutas);
        if($fruta !== false){
            array_splice($this->frutas, $fruta,1);
        }
    }

    public function remover(){
        
        if(isset($fruta)){
            array_pop($this->frutas);
        }
    }

}//TÉRMINO DA CLASSE
?>