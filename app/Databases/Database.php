<?php

namespace App\Database;

use PDO;
use PDOException;

class Database
{
    protected string $dsn;
    protected string $username;
    protected string $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=demo';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    function connect(): PDO|string
    {
        $conn = null;

        try {
            $conn = new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $PDOException) {
            echo $PDOException->getMessage();
            die();
        }

        return $conn;
    }
}