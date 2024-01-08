<?php

 class Person1{
  
    public $name;
    private $phone;

    public function __construct($name , $phone){

        $this -> name = $name;
        $this -> phone = $phone;
        
    }

    public function __sleep()
    {
        unset ($this -> phone);
    }

    public function __wakeup()
    {
        echo "I am waking up!" . PHP_EOL;
    }
 }

  $p = new Person1(name:"Thembelani", phone: "0662713860");

?>