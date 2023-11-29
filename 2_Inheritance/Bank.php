<?php

class Bank{
    protected $BankName;
    private $TotalMoney;
    private $Clients;

    function __construct($BankName, $TotalMoney, $Clients){
        $this->BankName = $BankName;
        $this->TotalMoney = $TotalMoney;
        $this->Clients = $Clients;
    }

    final function display(){
        echo "Bank Name: ". $this->BankName. "\n";
        echo "Total Money: ". $this->TotalMoney. "\n";
        echo "Clients: ". $this->Clients. "\n";
    }
}

class User extends Bank{
    private $AccoutNumber;
    private $Balance;
    private $Name;
    private $telephone;

    function __construct( $AccoutNumber, $Balance, $Name, $telephone){
        $this->AccoutNumber = $AccoutNumber;
        $this->Balance = $Balance;
        $this->Name = $Name;
        $this->telephone = $telephone;
    }

    function Info_User(){
        echo "Bank Name: ".$this->BankName."\n";
        echo "Account Number: ". $this->AccoutNumber. "\n";
        echo "Balance: ". $this->Balance. "\n";
        echo "Name: ". $this->Name. "\n";
        echo "Telephone: ". $this->telephone. "\n";
    }
}

$bank = new Bank("ABC Bank", 1000000, 5000);
$bank->display();

$user = new User("123456789", 5000, "John Doe", "+1234567890");
$user->Info_User();
