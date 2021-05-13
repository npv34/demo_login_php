<?php


namespace App\Model;


use App\Database\Database;

class Model
{
    protected \PDO|string $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->connect();
    }

    function getAll($column, $table)
    {

    }
}