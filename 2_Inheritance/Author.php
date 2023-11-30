<?php
class Author {
    public $authorName;
    public $birthDate;
    public $nationality;

    function __construct($authorName, $birthDate, $nationality){
        $this->authorName = $authorName;
        $this->birthDate = $birthDate;
        $this->nationality = $nationality;
    }
    function getName(){
        return $this->authorName;
    }
    function getBirthDate(){
        return $this->birthDate;
    }
    function getNationality(){
        return $this->nationality;
    }
    function display(){
        echo "NAME : ". $this->authorName. " BIRTH DATE : ". $this->birthDate. " NATIONALITY : ". $this->nationality . "\n";
    }
}
class Book extends Author{
public $title;
public $price;
private $author;

function __construct($title, $price, Author $author){
    $this->title = $title;
    $this->price = $price;
    $this->author = $author;

}
function getTitle(){
    return $this->title;
}
function getPrice(){
    return $this->price;
}
function ShowBookInfo(){
    echo "TITLE : ". $this->title. " PRICE : ". $this->price. "\n";
    $this->author->display();
 
}
}
$author1 = new Author("Andrzej Niebieski", "1990-01-01", "Polish");
$book1 = new Book("PHP", 1000, $author1);

$author1->display();
$book1->ShowBookInfo();

?>