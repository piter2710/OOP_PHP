<?php
abstract class Database{
    abstract public function getConnection();
    abstract public function setConnection($connection, $connectionActive);
}
class DBConnection extends Database{
    public $connection;
    public $connectionActive;

    public function setConnection($connection, $connectionActive){
        $this->connection = $connection;
        $this->connectionActive = $connectionActive;
    }
    public function getConnection(){
    $arr = [$this->connection, $this->connectionActive];
        return $arr;
    }
}
$db1 = new DBConnection("localhost", true);
$db1->setConnection("localhost", false);
$db1_arr = $db1->getConnection();
var_dump($db1_arr);



?>