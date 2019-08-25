<?php
require 'core/init.php';
 class Trafika extends  Prodavnica
{
    public function __construct(string $tip,string $naziv){
        $this->tip = $tip;
        $this->naziv = $naziv;
    }
}

?>