<?php

class FirstClass {

    const EXAMPLE = 'You cant change this';

    public function test()
    {
        $testing = 'This is a test';
        return $testing;
        // echo self::EXAMPLE;
    }

}

// $a = FirstClass::test();
// echo $a;