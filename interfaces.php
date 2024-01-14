<?php
//An Interface is provided so you can describe a set of functions and then hide the final implementation 
// of those functions in an implementing class. This allows you to change the Implementation of those functions without changing how you use it
// Interfaces can extend each other
// Interfaces cannot have methods with body
// Interfaces cannot have protected,private methods and variables

interface MyInterface
{    
     public function method1();
}

interface MyInterface2
{    
     public function method2();
}

class MyClass implements MyInterface, MyInterface2{

    public function method1()
    {
        return 0;
    }

    public function method2()
    {
        return 0;
    }
}


$myClass = new MyClass();