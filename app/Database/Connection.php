<?php

namespace App\Database;

use mysqli;

class Connection
{
    private static $instance = null;
    private $connection;
    private $isConnected = false;


    private function __construct()
    {
        $this->connection = new \mysqli("localhost", "root", "", "Railway");

        if ($this->connection->connect_error) {
            die("Database connection failed: " . $this->connection->connect_error);
        }
    
    }

    public static function getInstance(): \mysqli
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance->connection;
    }
}