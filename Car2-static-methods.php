<?php 

 class Car3{

    private $color = 'red';
    private $weight = 1000;
    static private $availableColors = ['silver','orange','yellow','purple'];

    public static function getAvailableColors(){

        return self::$availableColors;
    }
 
 }

 $myCar = new Car3();

 Car3::getAvailableColors();
?>
