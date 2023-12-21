<?php
namespace app\mercado;

class Padaria implements Lista{

    public $padaria = [];

    public $pao;

    public function setPao($pao){
        return $this->pao = $pao;
    }

    public function adicionar()
    {
        if(isset($pao)){
            array_push($this->padaria, $this->setPao($pao));
        }
    }

    public function editar($busca){
        $pao = array_search($busca, $this->padaria);
        if($pao !== false){
            array_splice($this->padaria, $pao,1);
        }
    }

    public function remover(){
        
        if(isset($pao)){
            array_pop($this->padaria);
        }
    }

}//TÉRMINO DA CLASSE
?>