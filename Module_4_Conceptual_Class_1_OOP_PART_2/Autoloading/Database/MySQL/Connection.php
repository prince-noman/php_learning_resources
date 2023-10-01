<?php

namespace Database\MySQL;

class Connection
{
    private string $databaseUrl = 'mysql:dbname:3000';

    public function getDatabaseUrl()
    {
        return $this->databaseUrl . PHP_EOL;
    }
}
