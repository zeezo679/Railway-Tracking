<?php

namespace App\Models;

use App\Database\Connection;

class User
{
    protected $db;

    public function __construct()
    {
        $this->db = Connection::getInstance();
    }   
}