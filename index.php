<?php
require 'core/init.php';
 $racun = new Racun(new Kupac('d','p',333), new DateTime(), new Proizvodi('Trafika','lek','brufen',-55,44));
  $racun1 = new Racun(new Kupac('d','p',333),new DateTime(), new Proizvodi('Apoteka','lek','leklek',55,44));
 $racun2 = new Racun(new Kupac('d','p',333), new DateTime(), new Proizvodi('Trafika','cigare','malboro',55,44));
 $racun3 = new Racun(new Kupac('d','p',333), new DateTime(), new Proizvodi('Trafika','sok','coca-cola',55,-55));
 $racun4 = new Racun(new Kupac('d','p',333),new DateTime(), new Proizvodi('Supermarket','cokolada','milka',55,44));
 $racun5 = new Racun(new Kupac('d','p',333), new DateTime(), new Proizvodi('Supermarket','pelinkovac','gorki list',55,44));
?>
