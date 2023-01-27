<?php

namespace App\Models;

class LogOut {

    function __construct()
    {
        session_start();
        unset($_SESSION['user']);
        header('Location: /');
    }

}
