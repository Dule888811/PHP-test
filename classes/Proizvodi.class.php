<?php
require 'core/init.php';
 class Proizvodi extends  Prodavnica
{
    public $tip;
    public $naziv;
    public $cena;
    public $zalihe;  
    public $tipProdavnice;
    public function __construct($tipProdavnice,$tip,string $naziv, int $cena,int $zalihe){
        $this->tipProdavnice = $tipProdavnice;
        $this->tip = $tip;
        $this->naziv = $naziv;
        $this->cena = $cena;
        $this->zalihe = $zalihe;
        if($tipProdavnice == 'Apoteka' && $tip == 'cigarete'){
                echo 'pod mac bato!';
        }
        if($tipProdavnice == 'Trafika'  && $tip == 'lek'){
            echo 'pod mac bato!';
        }
        if($tipProdavnice == 'Supermarket'  && $tip == 'lek' && $tip == 'lek' && $tip == 'cigarete'){
            echo 'pod mac bato!'; 
    }
        
   }
    
}

?>