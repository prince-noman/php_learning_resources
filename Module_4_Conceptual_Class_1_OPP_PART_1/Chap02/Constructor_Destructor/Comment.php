<?php

// Constructor => Classes which have a constructor method, call this method on each newly-created object, so it is suitable for any initialization that the object may need before it is used.

// Destructor =>  The destructor method will be called all other methods are called. So it is suitable for any clean-up needs.

class Comment
{
    public $text;
    public $userId;

    public function __construct( $text, $userId )
    {
        $this->text   = $text;
        $this->userId = $userId;
    }

    public function __destruct()
    {
        echo "It is a destruct Method";
    }
}

$newComment = new Comment( "This comment", 1 );

// echo $newComment->text;
// echo $newComment->userId;
echo $newComment->text . " is from user ID: " . $newComment->userId . PHP_EOL;
