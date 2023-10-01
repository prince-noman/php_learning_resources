<?php
// See we have to add multiple require statement for multiple files. Which we can avoid by autoloading.
require "Autoloading/App/Connection/MysqlConnection.php";
require "Autoloading/App/Utility/Randomfile.php";

// This is our autoloader file, the logic is implemented in this file. Before using this file we need to uncomment the logic.
// include 'autoloader.php';
use App\Connection\MysqlConnection;
use App\Utility\Randomfile;

$mysqlConnection = new MysqlConnection();
echo $mysqlConnection->databaseUrl . "\n";

// $randomUtility = new Randomfile();
// echo $randomUtility->status;

// To check this, you must have autoloading enabled and uncomment the logic in the autoloader.php file.
// echo $mysqlConnection->getDatabaseUrl();
