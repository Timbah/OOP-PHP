<?php
  
  //Tutorials on class constants examples
  
  class Car {

    public $color;
    public $manufacturer;

    const MY_CONSTANT = [];

    public function __construct($color, $manufacturer){

        $this -> color = $color;
        $this -> manufacturer = $manufacturer;
        
    }

  }

  $myCar = new Car(color:'white', manufacturer:'bmw');
  var_dump($myCar);
 
?>