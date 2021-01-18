<?php

class SecondClass extends FirstClass {

    public static $staticProperty = 'A static property!';

    public static function anotherTest()
    {
        echo parent::EXAMPLE;
        echo self::$staticProperty;
    }
}

$b = SecondClass::anotherTest();
echo $b;