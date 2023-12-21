<?php
namespace app\mercado;

class Acougue implements Lista{

    public $acougue = [];

    public $carne;

    public function setCarne($carne){
        return $this->carne = $carne;
    }

    public function adicionar()
    {
        if(isset($carne)){
            array_push($this->acougue, $this->setCarne($carne));
        }
    }

    public function editar($busca){
        $carne = array_search($busca, $this->acougue);
        if($carne !== false){
            array_splice($this->acougue, $carne,1);
        }
    }

    public function remover(){
        
        if(isset($carne)){
            array_pop($this->acougue);
        }
    }

}//TÉRMINO DA CLASSE
?>