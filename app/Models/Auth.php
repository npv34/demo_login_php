<?php

namespace App\Model;


use App\Database\Database;

class Auth extends Model
{
    function checkUser($email, $password)
    {
        $sql = 'SELECT * FROM users WHERE email = ? AND password = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $password);
        $stmt->execute();
        return $stmt->fetch();
    }


}