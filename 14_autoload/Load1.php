<?php
spl_autoload_register(function($classname){
    echo "Loading the class $classname";
    require_once $classname. ".php";
})

$hello1 = new Hello();
$hello1->hello();
?>