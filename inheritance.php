<?php

class ParentClass
{

    public    $property1 = '1';
    protected $property2 = '2';
    private   $property3 = '3';
}

class ChildClass extends ParentClass
{
    public  $property1 = '11';
    protected $property2 = '22';
}

$obj = new ChildClass();