<?php

 class myPerson{

    public $name = 'Thembelani';
    private $phone = '0662713860';

    public function __invoke(){

        return 'Object was invoked as a function!' . PHP_EOL;;
        
    }

   
 }

 $p123 = new myPerson();

 var_dump(is_callable($p123));
 echo $p123();
?>