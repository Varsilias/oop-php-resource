<?php

namespace Person;

class Person {

    // Creating Properties or variables
    public $name;
    public $eyeColor;
    public $age;

    // public static $drinkingAge = 21;

    // Creating Constructor
    // public function __construct($name, $eyeColor, $age){
    //     $this->name = $name;
    //     $this->eyeColor = $eyeColor;
    //     $this->age = $age;
    // }
    //Creating Methods or functions
    public function setName(string $newName){
        $this->name = $newName;
    }

    public function getName(){
        return $this->name;
    }

    // public static function setDrinkingAge($newDA){
    //     self::$drinkingAge = $newDA;
    // }
}

