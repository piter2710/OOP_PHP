<?php

class Calculator{
    static public $result;

    static function add($a, $b){
        //$result = $a + $b;
        //return $result;
        self::$result = $a + $b;
    }

}
Calculator::$result = Calculator::add(1,2);
echo Calculator::$result . PHP_EOL;
echo Calculator::add(10, 15). PHP_EOL;

?>