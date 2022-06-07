<?php 
class Utente{
    protected $nome;
    protected $cognome;
    protected $prodotti;

    function __construct($_nome,$_cognome,$_prodotti = []){
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->prodotti = $_prodotti;
    }

    public function getNome(){
        return $this->nome;
    }
    public function getCognome(){
        return $this->cognome;
    }
    public function getProdotti(){
        return $this->prodotti;
    }

    public function setNome($_nome){
        $this->nome = $_nome;
    }
    public function setTipo($_tipo){
        $this->tipo = $_tipo;
    }
    public function setProdotti($_prodotti){
        $this->prodotti[] = $_prodotti;
    }
}
?>