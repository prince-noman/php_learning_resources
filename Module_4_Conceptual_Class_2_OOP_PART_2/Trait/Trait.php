<?php
//Inheritance => is a
//Composition => has a
class Post
{
    use Shareable;
}

class Comment
{

}

trait Shareable
{
    public function share()
    {
        echo "Shared Successfully \n";
    }
}
trait Likeable
{
    public function like()
    {
        echo "Liked Successfully \n";
    }
}
$post = new Post();
$post->share();

$comment = new Comment();