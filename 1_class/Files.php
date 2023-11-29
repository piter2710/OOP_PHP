<?php
class Files{
    function display($filename){
        $content = file_get_contents($filename);
        echo $content;
    }
    function get($filename){
        $content = file_get_contents($filename);
        return $content;
    }


}
$file = new Files();


$file->display('/files/file.txt');




?>