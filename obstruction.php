<?php
//Obstruct classes know what should be done, but not how. i.e. it can have methods without bodies; extending classes define the logic
//Rules for child classes extending an abstract class
// Re-declare all abstract methods
// Arguments should be the same as the parent class
// Methods in child class can have additional defaults arguments
// Method's signature must be the same i.e. if abstract class uses type hinting in arguments/return values; child class must match that
// Visibility of the methods in child class must be the same or less restricted than the parent abstract class
// Objects cannot be created from the abstract class


abstract class Shape
{
    public $color;

    public function __construct($color)
    {

        $this->color = $color;
    }

    abstract public function getArea(): float; //child classes must always define this abstract method

    public function getColor()
    {

        return $this->color;
    }
}

class Triangle extends Shape
{
    public function getArea(): float
    {
        return 0;
    }
}

class Circle extends Shape
{

    public $radius;

    public function __construct($color, $radius)
    {
        parent::__construct(color: $color);
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return $this->radius * $this->radius * 3.14;
    }
}

class Rectangle extends Shape
{

    public $width;
    public $length;

    public function __construct($color, $width, $length)
    {
        parent::__construct(color: $color);
        $this->width = $width;
        $this->length = $length;
    }

    public function getArea(): float
    {
        return $this->width * $this->length;
    }
}


$t = new Rectangle(color: "Red",width:10,length:5);
$circle = new Circle(color:"blue",radius:5);
echo $t->getArea() . PHP_EOL;
echo $circle->getArea() . PHP_EOL;
