<?php
 
 class Car2{

    public $color = 'red';
    private $weight = 2000;
    static public $availableColors = ['red','green','blue','white'];

    //Class constant....
    static $counter = 0;
    //Instance/object variable
    public $myCounter = 0;

    public function __construct(){

        $this -> myCounter++;
        self::$counter++;
    }
 

 }

 $myCar = new Car2();
 echo Car2::$counter.' - '. $myCar -> myCounter . PHP_EOL;

 $myCar2 = new Car2();
 echo Car2::$counter . ' - '. $myCar2 -> myCounter . PHP_EOL;
 
?>