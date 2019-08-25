<?php
require 'core/init.php';
  class Kupac 
{
    public $ime;
    public $prezime;
    public $brojTelefona;
    public function __construct(string $ime,string $prezime,int $brojTelefona){
        $this->ime = $ime;
        $this->prezime = $prezime;
        $this->brojTelefona = $brojTelefona;
    }
}
?>