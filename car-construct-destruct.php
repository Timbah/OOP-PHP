<?php
  
  class Car{
    
    private $color = 'red';
    private $weight = 2000;

    public function __construct($color = 'white', $weight){
       
        $this -> color = $color;
        $this -> weight = $weight;
        echo 'Car object is created!' . PHP_EOL;
        
    }

    public function getColor(){

        return $this -> color;
    }

   public function __destruct(){

      echo 'I am destroyed!' . $this -> color . PHP_EOL;

    }
   
  }


  $myCar  = new car(color:'blue' , weight:100);
  $myCar2 = new car(color:'red' , weight:2000);

  echo $myCar -> getColor() . PHP_EOL;
  echo $myCar2 -> getColor() . PHP_EOL;
  
  //manually destroy an object
  //unset($myCar);
  
?>