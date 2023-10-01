<?php

namespace App\Connection;

use Database\MySQL\Connection;

class MysqlConnection
{
    public string $databaseUrl = 'mysql:host=127.0.0.1;dbname=php';
    public function __construct()
    {
        return $this->databaseUrl;
    }

    //You can also write like this.
    // public function __construct( public string $databaseUrl = 'mysql:host=127.0.0.1;dbname=php' )
    // {}

    // To make the below code work we need autoloader enabled.
    // Now we are trying to access the MySQL database From Our Database Folder->MySQL->Connection.php file.
    public function getDatabaseUrl()
    {
        // First of all we are creating our MySQL Database's Connecton Class's object. Don't forget to add the namespace path of Connection Class (use Database\MySQL\Connection;) above of this file.
        $connection = new Connection();
        // Then we are accessing the getDatabaseUrl() method from our MySQL Database's Connecton Class.
        return $connection->getDatabaseUrl();
    }
}
