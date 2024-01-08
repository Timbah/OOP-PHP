<?php

 class myPerson{

    public $name;
    private $phone ;
    static $counter = 0;

    public function __construct($name , $phone){

        $this -> name = $name;
        $this -> phone = $phone;
        self::$counter++; 
    }

    public function __invoke(){

        return 'Object was invoked as a function!' . PHP_EOL;;
        
    }

    public function __sleep()
    {
        unset($this -> phone);
        return ['name'];
    }

    public function __wakeup()
    {
        echo "I am waking up!". PHP_EOL;
        self::$counter++;
    }

  ///Called after the object is cloned i.e. it is called on the new object

  public function __clone()
  {
   //var_dump($this) . PHP_EOL;
   self::$counter++;
  }

 }

 $p123 = new myPerson(name:"Thembelani",phone:"0662713860");

 var_dump($p123);
 //echo $p123();

 $serialized = serialize($p123);
 $newP123 = unserialize($serialized);

 var_dump($newP123);

 $cloneObj = clone $newP123;
 var_dump($cloneObj);
 echo myPerson::$counter;
?>