<?php

class Person{

    public  $name  = "Thembelani";
    private $phone = 12345;

    public function __get($PropName){

        if ($PropName == 'username'){

            return $this -> name;
        }
        return "Property ". $PropName . "Does not exist";
    }

    public function __call($name, $arguments){
        //Executed whenever we attempt to call functions in a class

        //var_dump($name,$arguments);

        if($name == 'getMobilePhone'){

            return $this -> getPhone();
        }


    }

    public static function __callStatic($name, $arguments)
    {
        echo $name . ' static method was called';
    }

    public function __set($PropName, $value){

        if($PropName == 'username'){
            $this -> name = $value;
        }
    }

    
    public function getPhone(){

        return $this -> phone;
    }

    public function setPhone($value){

        $this -> phone = $value;
    }


}

$myP = new Person();

// echo $myP -> username;

// $myP -> username = 'Junior';

echo $myP -> name;

$myP -> setPhone(987055);
echo $myP -> getMobilePhone();

$myP :: hello();
 
?>