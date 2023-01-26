<?php
include_once '../models/SignUp.php';

class SignUpController {

    public $email;
    public $pass;
    public $name;
    public $surname;
    public $phone;
    public $role;
    public $signUp;

    function __construct()
    {
        $this->email = $_POST['email'];
        $this->pass = $_POST['pass'];
        $this->name = $_POST['name'];
        $this->surname = $_POST['surname'];
        $this->phone = $_POST['phone'];
        $this->role = false;
        $this->signUp = new SignUp($this->email, $this->pass, $this->name, $this->surname, $this->phone);
    }
}

new SignUpController;
