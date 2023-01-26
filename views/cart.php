<?php
include_once './controllers/TitleController.php';
include_once './models/Connect.php';

$db = new Connect;
$db->connect();
$title = new TitleController();
$title = $title->getTitle(basename(__FILE__, '.php'));

include('views/header.php');
?>

<div class="content mt-3 mb-3">
    <h1>Корзина</h1>
    <div class="cart-items">
        <div class="cart-item">
            <div class="cart-product">
                <div class="cart-product-img">
                    <img src="./img/product1.jpg" alt="">
                </div>
                <div class="cart-product-name">
                    <a href="">Xiaomi Redmi 9A 2/32Gb Aurora Green</a>
                </div>
            </div>
            <div class="cart-count item-to-cart"><input type="number" id="itemCount" class="form-control" min="1" value="1"></div>
            <div class="cart-total">
                <p>8999 ₽</p>
            </div>
            <div class="cart-remove">
                <a href=""><i class="fa fa-minus" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="cart-item">
            <div class="cart-product">
                <div class="cart-product-img">
                    <img src="./img/product1.jpg" alt="">
                </div>
                <div class="cart-product-name">
                    <a href="">Xiaomi Redmi 9A 2/32Gb Aurora Green</a>
                </div>
            </div>
            <div class="cart-count item-to-cart"><input type="number" id="itemCount" class="form-control" min="1" value="1"></div>
            <div class="cart-total">
                <p>8999 ₽</p>
            </div>
            <div class="cart-remove">
                <a href=""><i class="fa fa-minus" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="cart-form">
        <form>
            <div class="cart-form-col">
                <div class="mb-3">
                    <label for="inputName" class="form-label">Ваше имя</label>
                    <input type="text" class="form-control" id="inputName">
                </div>
                <div class="mb-3">
                    <label for="inputPhone" class="form-label">Телефон</label>
                    <input type="text" class="form-control" id="inputPhone" value="+ 7 (949)">
                </div>
            </div>
            <div class="cart-form-col">
                <div class="mb-3">
                    <label for="inputPhone" class="form-label">Комментарий к заказку</label>
                    <textarea class="form-control"></textarea>

                </div>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Доставка
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Самовывоз
                        </label>
                    </div>
                </div>

            </div>
        </form>
        <button type="button" class="btn btn-primary">Подтвердить заказ</button>
    </div>
</div>


<?php
include('views/footer.php');
$db -> closeConnect();

?>
