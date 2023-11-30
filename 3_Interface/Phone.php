<?php
interface Phone{
    public function makeCall($number);
    public function sendMessage($number ,$message);
}
class IOS implements Phone{
    
    public function makeCall($number){
        echo "Making call to ". $number. "\n";
    }
    public function sendMessage($number, $message){
        echo "Sending message to ". $number. " with message ". $message. "\n";
    }
}
$Phone1 = new IOS();
$Phone1->makeCall("9876543210");
$Phone1->sendMessage("9876543210", "Hello");


?>