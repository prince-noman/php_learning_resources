<?php

// Allow for better organization by grouping classes that work together to perform a task.
// Allow the same name to be used for more than one class

// These are the included files of the classes. Here we are including/requring files. If we have multiple classes in the same file then we have to add these require statement multiple times, which is solved by autoloading.
require 'Database/MySQL/Connection.php';
require 'Database/PostgreSQL/Connection.php';

// You can use fullpath while creating object
// $mySqlConnection = new Database\MySQL\Connection();
// echo $mySqlConnection->getDatabaseUrl();

// You can also declare nampespace path at the top of the file by using "use" keyword
// use Database\MySQL\Connection;

// $mySqlConnection = new Connection();
// echo $mySqlConnection->getDatabaseUrl();

//When same class names are used in same file
// use Database\MySQL\Connection as MySQLConnection;
// use Database\PostgreSQL\Connection as PostgreSQLConnection;

// $mySqlConnection = new MySQLConnection();
// echo $mySqlConnection->getDatabaseUrl();

// $postgresqlConnection = new PostgreSQLConnection();
// echo $postgresqlConnection->getDatabaseUrl();
