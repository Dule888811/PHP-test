<?php
    include_once 'core/init.php';
 class Racun 
{
    public static $brojRacuna = 1;
    public $proizvodi;
    public $datum;
    public $cena;
    public function __construct(Kupac $kupac, datetime $datum,Proizvodi $proizvod)
    {
        $this->datum =date_format(new DateTime(),"Y/m/d H:i:s");
        $ime = $kupac->ime;
        $prezime = $kupac->prezime;
        $brojTelefona = $kupac->brojTelefona;
        $proizvodi[] =  $proizvod;
           
        foreach($proizvodi as $proizvod)
        {
            var_dump($proizvod);
            if($proizvod->zalihe <= 0){
                continue;
            }
           /* if( $proizvod->tip = $proizvod->tip &&
            $proizvod->naziv = $proizvod->naziv &&
            $proizvod->cena = $proizvod->cena &&
            $proizvod->zalihe = $proizvod->zalihe){
                $kolicina = 0;
                $kolicina++;              
           $this->cena  +=  $proizvod->cena;
           $proizvod->zalihe = $proizvod->zalihe - $kolicina;
            }
            var_dump($proizvod->cena, $proizvod->naziv);
            */
            $proizvod->zalihe = $proizvod->zalihe -1;
            echo "Broj ranuca :" . self::$brojRacuna .   "</br>";
            echo "datum :" .  $this->datum .   "</br>";
            echo "ime :" . $kupac->ime .   "</br>";
            echo "prezime :" . $kupac->prezime .   "</br>";
            echo "brojTelefona :" . $kupac->brojTelefona .   "</br>";
            echo "naziv:" .  $proizvod->naziv  .   "</br>" ;
            echo "zalihe:" . $proizvod->zalihe .   "</br>" ;
            echo "cena:" .  $proizvod->cena .   "</br>" ;
           
            if(strtotime('2011-08-19 17:14:40') < strtotime('- 1 year')) {
                self::$brojRacuna++; 
            }
            else(
                self::$brojRacuna = 1
            ) ;
            if(('parking karte') == $proizvod->tip || ((('lek') == $proizvod->tip)) ){
                echo "seriski broj :" . rand() ;
            };
            if((('lek') == ($proizvod->tip) && $proizvod->cena < 0)){
                continue;
            };
        }                   
    }
}
