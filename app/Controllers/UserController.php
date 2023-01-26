<?php

namespace App\Controllers;

use App\Models\User;
use Symfony\Component\Routing\RouteCollection;

class UserController
{

    function showAction(RouteCollection $routes)
    {
        $signIn = new User();


        $title = 'Авторизация';
        require_once APP_ROOT . '/views/header.php';
        require_once APP_ROOT . '/views/signin.php';
        require_once APP_ROOT . '/views/footer.php';
    }

    function showProfile(RouteCollection $routes)
    {   // Добавить обработку доступа к странице без авторизации
        $user = new User;

        if ($user->checkLogin() == true) {
            $title = 'Профиль';
            require_once APP_ROOT . '/views/header.php';
            require_once APP_ROOT . '/views/profile.php';
            require_once APP_ROOT . '/views/footer.php';
        }
    }
    // For form "action"
    function checkUser(RouteCollection $routes)
    {
        $_SESSION['test'] = $_POST['email'] . " " . md5($_POST['pass']);
        $login = new User;
        $login->read($_POST['email'], md5($_POST['pass']));
    }

    function logOut(RouteCollection $routes)
    {
        unset($_SESSION['user']);
        header('Location: /');
    }
}
