<?php

  class Person{

    public $name = 'Thembelani';
    public $surname = 'Ngema';
    private $phone = '+27662713860';

    public function __toString(){

        //echo "called" . PHP_EOL; 
        return 'Name: '. $this -> name . ' Surname: ' . $this -> surname . ' Phone: ' . $this -> phone;
        
    }

  }
 
  $myPerson = new Person();

  echo $myPerson;

?>