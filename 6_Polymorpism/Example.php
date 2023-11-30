<?php

interface Database{

    function openConnection();

}
class OracleDatabase implements Database{
    function openConnection(){
        echo "Connection to Oracle Database\n";
    }
}

class MySQLDatabase implements Database{
    function openConnection(){
        echo "Connection to MySQL Database \n";
    }
}

$db1 = new OracleDatabase();
$db1->openConnection();

$db2 = new MySQLDatabase();
$db2->openConnection();

?>