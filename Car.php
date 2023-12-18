<?php
 
 class Car {

    private $color = 'none';
    public $weight;
    private $year;
    private $availableColors = ['red','green','blue','white','yellow'];

    public function setYear($year){

      $this -> year = $year;

    }

    public function getYear(){

      return $this -> year;
    }

    public function setColor($color){

      if (in_array($color, $this -> availableColors)){

         $this -> color = $color;
      }
    }

    public function getColor(){

      return $this -> color;
    }

 }

 $myCar = new Car();

 $myCar ->setColor(color:'red');

 $myCar -> setYear(year:2023);

  echo $myCar -> getColor(). '\n';
//  echo $myCar -> getYear();

?> 