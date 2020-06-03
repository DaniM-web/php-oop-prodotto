<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP - OOP</title>
  </head>
  <body>

   <?php


     class Lamp
     {
       public $price;
       public $voltage;
       public $power;

       public function __construct($voltage, $power, $price)
       {
         $this -> voltage = $voltage;
         $this -> power = $power;
         $this -> price = $price;
       }

       public function doubleUp()
       {
         // switch ($property) {
         //   case $voltage:
         //     $this -> voltage *= 2;
         //     break;
         //   case $power:
         //     $this -> power *= 2;
         //     break;
         //   case $price:
         //     $this -> price *= 2;
         //     break;
         //
         //   default:
         //     echo 'select a property to double UP';
         //     break;
           // if ($property === $voltage) {
           //   $property = $voltage;
           //    $this -> voltage *= 2;
           // }
           // if($property === $power) {
           //   $property = $power;
           //    $this -> power *= 2;
           // }
           // if ($property === $price) {
           //    $property = $price;
           //    $this -> price *= 2;
           // }

           $this -> voltage *= 2;
           $this -> power *= 2;
           $this -> price *= 2;

        }

       public function printDetails()
       {
         echo
         'Il voltaggio della lampadina è: ' . $this -> voltage . 'V' . '<br>'
        . 'La potenza della lampadina è: ' . $this -> power . 'W' . '<br>'
        . 'Il prezzo della lampadina è: ' . $this -> price . '$'
        . '<br>-----------------------<br>'
        ;
       }
     };

     class NeonLamp extends Lamp
     {
       public $size;

       function __construct($voltage, $power, $size, $price)
       {
         parent:: __construct($voltage, $power, $price);
         $this -> size = $size;
       }

       public function printDetails()
       {
         echo
         'Il voltaggio del neon è: ' . $this -> voltage . 'V' . '<br>'
        . 'La potenza del neon è: ' . $this -> power . 'W' . '<br>'
        . 'La dimensione del neon è: ' . $this -> size . 'cm' . '<br>'
        . 'Il prezzo del neon è: ' . $this -> price . '$'
        . '<br>-----------------------<br>'
        ;
       }

       public function doubleUp()
       {
         parent:: doubleUp();
         $this -> size *= 2;
       }
     };

  ?>
  <h2>
    <?php

      // stampo classe lampadina
        $lamp1 = new Lamp(200,300,4.99);
        $lamp1 -> doubleUp();
        $lamp1 -> printDetails();

      // stampo classe neon
        $neon = new NeonLamp(500, 400, 120, 18.99);
        $neon -> doubleUp();
        $neon -> printDetails();

     ?>
  </h2>












  </body>
</html>
