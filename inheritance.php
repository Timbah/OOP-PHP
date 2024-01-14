<?php

class ParentClass
{

    public    $property1 = '1';
    protected $property2 = '2';  // Cannot be accessed outside this class
    private   $property3 = '3';

    public function getProperty2()
    {

        return $this->property2;
    }
}

class ChildClass extends ParentClass
{
    public    $property1 = '11'; //overriding a variable inherited from parent class
    protected $property2 = '22'; // cannot decrease visibility of all inherited variables, methods constants

    public function getProperty2()
    {
        $result  = parent::getProperty2();
        return "Something ". $result . PHP_EOL;
    }
}

$obj = new ChildClass();

echo $obj->property1 . PHP_EOL;

echo $obj->getProperty2() . PHP_EOL;
