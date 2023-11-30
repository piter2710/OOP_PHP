<?php
class StringHelper{
    static function countVowels($str){
    $count = 0;
    for($i = 0; $i < strlen($str); $i++){
        if($str[$i] == 'a' || $str[$i] == 'e' || $str[$i] == 'i' || $str[$i] == 'o' || $str[$i] == 'u'){
            $count+=1;
        }
    
    }
    return $count;
    }
}

echo StringHelper::countVowels("hello");
echo PHP_EOL;
echo StringHelper::countVowels("World is a Beautiful Place");





?>