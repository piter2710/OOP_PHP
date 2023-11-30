<?php

abstract class Phone{
    abstract function sendMessage($message, $number);
    abstract function Call($number);
    
}
class IOS extends Phone{
    function sendMessage($message, $number){
        echo "Sending message to $number\n";
    }
    function Call($number){
        echo "Calling $number\n";
    }
}

$Iphone1 = new IOS();
$Iphone1->sendMessage("Hello", "123456789");
$Iphone1->Call("123456789");