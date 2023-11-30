<?php
class Posts{
    public $post;


    function savePost(string $post) : bool{
        $this->post = $post;
        return true;
    }
    function fetchPost() : string{
        return $this->post;
    }
}
$post1 = new Posts();
$post1->savePost("This is a post");
echo $post1->fetchPost();echo PHP_EOL;
$post1->savePost("This is another Post");
echo $post1->fetchPost();

?>