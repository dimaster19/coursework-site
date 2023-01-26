<?php

include_once '../models/LogOut.php';

class LogOutController {
    public $logOut;
    function __construct()
    {
        $this->logOut = new LogOut();

    }
}

new LogOutController;
