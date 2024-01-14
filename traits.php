<?php

//It helps to reduce code duplication....no need to have same method copied and pasted in multiple classes...create a trait
// Trait can use another traits

trait MyTrait
{

    public $property = 10;

    public function fly() //can also be made abstract, for classes using the trait to implement
    {
        echo "I am flying" . PHP_EOL;
    }
}

trait EngineTrait
{

    public function hello()
    {

        echo "I have an engine!" . PHP_EOL;
    }
}

class Plane
{

    use MyTrait, EngineTrait;
}

class Helicopter
{
    use MyTrait, EngineTrait;
}

class CarClass
{

    use EngineTrait;
}

$myPlane = new Plane();
$myHelicopter = new Helicopter();
$myCar = new CarClass();

$myPlane->fly();
$myHelicopter->fly();

$myCar ->hello();
$myHelicopter ->hello();
