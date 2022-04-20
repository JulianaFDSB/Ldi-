<?php

class Categorias {
    
    private $idCategoria= "";
    private $descricao = "";
    
    
    private function __construct($idCategoria,$descricao){
        
        $this->setDescricao($descricao);
        $this->setIdCategoria($idCategoria);
          
    }
   
  

    


    public function getIdCategoria(){
        return $this->idCategoria;
    }

    public function setIdCategoria($idCategoria){
        $this->idCategoria = $idCategoria;
        return $this;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
        return $this;
    }

}


?>