<div class="content mt-3 mb-3 radius-content py-3 px-3">
    <h1>Авторизация</h1>
    <form action="/login" method="post"  class="row g-3 needs-validation" validate>
        <div class="col-md-6">
            <input type="email" name="email" aria-label="E-mail" placeholder="E-mail" required="" class="form-control">
        </div>
        <div class="col-md-6">
            <input type="password" aria-label="Пароль" placeholder="Пароль" name="pass" required="" class="form-control">
        </div>
        <div class="col-12 d-flex" style="align-items: center;">
            <button class="btn btn-primary" type="submit">Войти</button>
            <a class="mx-2" href="/signup">Зарегистрироваться</a>
        </div>
    </form>

    <?if(isset($_SESSION['message'])) {
        echo '<div class="mt-4" style="witdh:100%; font-size: 16px; text-align:center; color: green">'.$_SESSION['message'].' </div>';

    }
    unset($_SESSION['message']);

    if(isset($_SESSION['message2'])) {
        echo '<div class="mt-4" style="witdh:100%; font-size: 16px; text-align:center; color: red">'.$_SESSION['message2'].' </div>';

    }
    unset($_SESSION['message2']);
    ?>

</div>
