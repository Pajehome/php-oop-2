<?php 
require_once __DIR__ . '/utente.php';
class registrato extends utente{
    protected $email;

    function __construct($_nome,$_cognome,$_prodotti = [],$_email){
        parent::__construct($_nome,$_cognome,$_prodotti = []);
        $this->email=$_email;
    }


    public function getEmail(){
     return  $this->email;
    }
    public function setEmail($_email){
        $this->email=$_email;
    }
    
     public function getDiscount($_prezzo){
         $prezzo = (($_prezzo * (100 - 20)/  100));
         return $prezzo;
     }
}
?>