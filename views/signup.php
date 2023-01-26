<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: /profile');
}

include_once './models/Connect.php';

include_once './controllers/TitleController.php';

$title = new TitleController();
$title = $title->getTitle(basename(__FILE__, '.php'));
include('views/header.php');
?>


<div class="content mt-3 mb-3 radius-content py-3 px-3">
    <h1>Регистрация</h1>
    <form action="../controllers/SignUpController.php" method="post" class="row g-3 needs-validation" validate>
        <div class="col-md-6">
            <input type="email" name="email" aria-label="E-mail" placeholder="E-mail" required="" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="password" aria-label="Пароль" placeholder="Пароль" name="pass" required="" class="form-control">
        </div>
        <div class="col-md-4">
            <input type="text" aria-label="Имя" name="name" placeholder="Имя" value="" required="" class="form-control">
        </div>
        <div class="col-md-4">
            <input type="text" aria-label="Фамилия" name="surname" placeholder="Фамилия" value="" required="" class="form-control">
        </div>
        <div class="col-md-4">
            <input type="tel" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" aria-label="Телефон"  placeholder="+7(___)___-__-_"  value="" required="" name="phone" class="form-control">
        </div>
        <div class="col-12 d-flex" style="align-items: center;">
            <button class="btn btn-primary" type="submit">Зарегистрироваться</button>
            <a class="mx-2" href="/signin">Уже есть аккаунт?</a>
        </div>
    </form>
</div>

<!-- Close DB -->
<?php

include('views/footer.php');

?>
