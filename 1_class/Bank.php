<?php
class Bank{
    public $acno;
    public $name;
    public $balance;
    public function __construct($acno, $name, $balance){
        $this->acno = $acno;
        $this->name = $name;
        $this->balance = $balance;
    }

    function depositAmount($amount){
        
    $this->balance += $amount;

    }
    function withdrawAmount($amount){
        
    $this->balance -= $amount;

    }
    function showBalance(){
        echo "Balance is: ". $this->balance . PHP_EOL;
    }

}

$user1 = new Bank(1, 'Rajesh', 132);
$user1->showBalance();
$user1->depositAmount(100);
$user1->showBalance();
$user1->withdrawAmount(100);
$user1->showBalance();



?>