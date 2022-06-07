<?php 
class Prodotti{
   protected $nome;
   protected $tipo;
   protected $prezzo;

    function __construct($_nome,$_tipo,$_prezzo){
        $this->nome = $_nome;
        $this->tipo = $_tipo;
        $this->prezzo = $_prezzo;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function getPrezzo(){
        return $this->prezzo;
    }

    public function setNome($_nome){
        $this->nome = $_nome;
    }
    public function setTipo($_tipo){
        $this->tipo = $_tipo;
    }
    public function setPrezzo($_prezzo){
        $this->prezzo = $_prezzo;
    }
}
?>