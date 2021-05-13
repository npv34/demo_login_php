<?php

namespace App\Controller;

use App\Model\Auth;
use JetBrains\PhpStorm\Pure;

session_start();

class AuthController
{
    protected Auth $authModel;

    #[Pure] public function __construct()
    {
        $this->authModel = new Auth();
    }

    function login($request)
    {
        $userLogin = $this->authModel->checkUser($request['email'], $request['password']);
        if (!$userLogin) {
            header('Location: ../../resource/Views/login.php');
        }

        $_SESSION['isLogin'] = true;
        $_SESSION['user'] = $userLogin;
        header('Location: ../../index.php');

    }
}