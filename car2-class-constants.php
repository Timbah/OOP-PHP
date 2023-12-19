<?php
  
  //Tutorials on class constants examples. helps reduce number of errors
  
  class Car {

    public $color;
    public $manufacturer;

    const MANUFACTURER_BMW = 'BMW';
    const MANUFACTURER_TELSA = 'telsa';
    const MANUFACTURER_MERCEDES = 'mercedes';

    const COLOR_RED = 'red';
    const COLOR_GREEN = 'green';
    const COLOR_BLUE = 'blue';

    public function __construct($color, $manufacturer){

        $this -> color = $color;
        $this -> manufacturer = $manufacturer;
        
    }

  }

  $myCar = new Car(color: Car::COLOR_GREEN, manufacturer: Car::MANUFACTURER_BMW);
  var_dump($myCar);
 
?>