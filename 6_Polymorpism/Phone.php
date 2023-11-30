<?php
interface Phone{
    function System();
}
class IOS implements Phone{
    function System(){
        echo "We are on IOS\n";
    }
}
class Android implements Phone{
    function System(){
        echo "We are on Android\n";
    }
}
$Iphone = new IOS();
$Iphone->System();

$Android = new Android();
$Android->System();


?>