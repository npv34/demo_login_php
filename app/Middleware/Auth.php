<?php

namespace App\Middleware;

session_start();

class Auth
{
    function checkLogin(): bool
    {
        if (empty($_SESSION['isLogin'])) {
            header('Location: resource/Views/login.php');
        }
        return true;
    }
}

