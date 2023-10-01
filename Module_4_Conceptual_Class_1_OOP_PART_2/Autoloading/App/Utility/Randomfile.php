<?php

namespace App\Utility;

class Randomfile
{
    public string $status = "I am from Randomfile.php";
    public function __construct()
    {
        return $this->status . "\n";
    }
}
