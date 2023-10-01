<?php

namespace Database\PostgreSQL;

class Connection
{
    private string $databaseUrl = 'postgresql:dbname:3000';

    public function getDatabaseUrl()
    {
        return $this->databaseUrl . PHP_EOL;
    }
}
