<?php

// Anonymous Class
// Anonymous Class is a class that is declared without a name.
// It is used when you need this class once.
$randomClass = new class {

    public string $name = "Anonymous Class";

    function getName()
    {
        return $this->name;
    }
};

print $randomClass->getName() . PHP_EOL;

/*==============================================
Practical Example
================================================*/
interface Logger
{
    public function log( string $text );
}

class AppErrorHandler
{
    private Logger $logger;

    public function __construct( Logger $logger )
    {
        $this->logger = $logger;
    }

    public function getLogger(): Logger
    {
        return $this->logger;
    }
}

$appErrorHandler = new AppErrorHandler( new class implements Logger
{

    public function log( string $text )
    {
        print $text;
    }
} );

$appErrorHandler->getLogger()->log( 'Logging an example error message' . PHP_EOL );
