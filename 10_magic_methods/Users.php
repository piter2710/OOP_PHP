<?php
class Users{
    public $username;
    public $password;
    public $email;
    function __construct($username, $password, $email){
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }
    function __set($name,$value){
        if ($name == 'username'){
            $this->username = $value;
        }
        if ($name == 'password'){
            $this->password = $value;
        }
        if ($name == 'email'){
            $this->email = $value;
        }
    }
    function __get($name){
        if ($name == 'username'){
            return $this->username;
        }
        if ($name == 'password'){
            return $this->password;
        }
        if ($name == 'email'){
            return $this->email;
        }
    }
    function __toString()
    {
       return "This is a Users Class that has username, password, and email \n";
    }
    function __call($name, $arguments)
    {
        echo $name. PHP_EOL;
        echo $arguments. PHP_EOL;
    }
    function __debugInfo()
    {
       return array('username'=>$this->username, 'password'=>$this->password, 'email'=>$this->email);
    }
    function __destruct()
    {
        echo "Successfully desctructed an object\n";
    }
    function Display(){
        echo "Username: ". $this->username. PHP_EOL;
        echo "Password: ". $this->password. PHP_EOL;
        echo "Email: ". $this->email. PHP_EOL;
    }

}
$user1 = new Users("Jane", "123456", "Jane@gmail.com");
$user1->Display();
echo PHP_EOL;
echo $user1->username.PHP_EOL;
echo $user1->password.PHP_EOL;
echo $user1->email.PHP_EOL;
echo PHP_EOL;
$user1->username = "John";
$user1->password = "654321";
$user1->email = "John@gmail.com";
echo $user1->username.PHP_EOL;
echo $user1->password.PHP_EOL;
echo $user1->email.PHP_EOL;
echo PHP_EOL;
echo $user1;
var_dump($user1);
unset($user1);
?>