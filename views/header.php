<!DOCTYPE html>
<html lang="en">

<head>

    <title><? echo $title ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <link rel="stylesheet" href="css/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


    <link rel="stylesheet" href="../public/css/style.css">




</head>

<body>
    <header>
        <div class="header-ad">
            <div class="content">
                <div class="social-link">
                    <a class="social-link-item"><i class="fa fa-telegram" aria-hidden="true"></i>
                    </a>
                    <a class="social-link-item"><i class="fa fa-vk" aria-hidden="true"></i>
                    </a>
                    <a class="social-link-item"><i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="search-workers">
                    <a href="#">Работа в Mobi-Like</a>
                </div>
                <div class="phones">
                    <a>+7 (949) 453-19-81</a>
                    <a>+7 (949) 453-19-79</a>
                </div>
                <div style="font-weight: 500;">
                    Ежедневно 9:00-18:00
                </div>
                <div class="modal1-btn"><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Заказать звонок</button></div>
                <!-- Модальное окно -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Заказать звонок</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="inputName" class="form-label">Ваше имя</label>
                                        <input type="text" class="form-control" id="inputName">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputPhone" class="form-label">Телефон</label>
                                        <input type="text" class="form-control" id="inputPhone" value="+ 7 (949)">
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary">Отправить</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="content">
            <div class="header-row">
                <div class="header-top">
                    <a href="/">Главная</a>
                    <a href="">Покупателям</a>
                    <a href="">Гарантии и возврат</a>
                    <a href="">Доставка и оплата</a>
                </div>
                <div class="mobile-header">
                    <img src="../public/img/logo.png" alt="">
                </div>
                <div class="header-bottom">
                    <div class="header-bottom-left">
                        <div class="header-logo">
                            <img src="../public/img/logo.png" alt="">

                        </div>
                        <div class="header-dropdown">
                            <button data-path="one" class="dropbtn">
                                Категории
                            </button>
                            <ul data-target="one" class="mydropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="mydropdown-item" href="#">Action</a></li>
                                <li><a class="mydropdown-item" href="#">Another action</a></li>
                                <li><a class="mydropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="header-search">
                        <input type="text" placeholder="Поиск по сайту" />
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>

                    <div class="header-cart">
                        <a href="/cart">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="header-account">
                        <a href="/profile">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </header>
