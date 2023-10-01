<?php
class ZoomConnection
{
    private static int $count = 0;

    private string $connectionID;

    public function __set( $name, $value )
    {
        $this->$name = $value;
    }

    public function __get( $name )
    {
        return $this->$name;
    }

    public function __construct()
    {
        self::$count++;
    }
    public function __destruct()
    {
        self::$count--;
    }

    public function getCount()
    {
        return self::$count;
    }

    public function __toString()
    {
        return "Connection ID: " . $this->connectionID;
    }
}

$connection1               = new ZoomConnection();
$connection1->connectionID = '123';
// print $connection1->connectionID;

print $connection1;

// $connection2 = new ZoomConnection();
// unset( $connection2 );
// print_r( $connection1 );
// print $connection1->getCount();
