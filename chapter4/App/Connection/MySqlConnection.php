<?php

namespace App\Connection;

use Database\MySQL\Connection;

class  MySqlConnection
{


//    /**
//     * using PHP 8.0 feature of assigning and declaring properties in one go
//     * @param string $databaseUrl
//     */
//    public function __construct(public string $databaseUrl = 'mysql-db-url'){}

    public function getDatabaseUrl(): string
    {
        $connection = new Connection();

        return $connection->getDatabaseUrl();
    }
}