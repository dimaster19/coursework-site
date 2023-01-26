<?php
class TitleController
{

    function getTitle($file_name)
    {
        if ($file_name == 'home') {
            return 'Интернет-магазин техники и электроники в Донецке (ДНР), купить в DNS';
        } elseif ($file_name == 'contact') {
            return 'Контакты';
        } elseif ($file_name == 'signup') {
            return 'Регистрация';
        } elseif ($file_name == 'signin') {
            return 'Авторизация';
        } elseif ($file_name == 'SignUpController.php') {
            return 'Авторизация';
        } elseif ($file_name == 'profile') {
            return 'Аккаунт';
        }
    }
}
