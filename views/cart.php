<div class="content mt-3 mb-3">
    <h1>Корзина</h1>
    <div class="cart-items">
        <?

        use App\Models\Product;

        if (isset($products)) {
            foreach ($products as $item) {
        ?>
                <div class="cart-item " id="<?echo $item->getId();?>">
                    <div class="cart-product">
                        <div class="cart-product-img">
                            <img src="img/<? echo $item->getMainImage(); ?>" alt="">
                        </div>
                        <div class="cart-product-name">
                            <a href="/product/<? echo str_replace(" ", "-", $item->getName()) ?>"><? echo $item->getName(); ?></a>
                        </div>
                    </div>
                    <div class="cart-count item-to-cart"><input type="number" id="itemCount" class="form-control" min="1" value="1" max="<? echo $item->getCount(); ?>"></div>
                    <div class="cart-total">
                        <p><? echo $item->getPrice(); ?></p>
                    </div>
                    <div class="cart-remove">
                        <a href="" class="del-product-link" data-id="<? echo $item->getId(); ?>"><i class="fa fa-minus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
        <? }
        } ?>
        <!-- Итог  -->
        <? if (isset($_SESSION['cart-count'])) {
            echo '
        <div class="cart-item d-flex w-100" style="justify-content: center">
            <div style="font-size: 18px; font-weight: 700; margin: 0 20px" id="totalPrioce">Итого: <span style="color: green">'.$totalPrice.'&nbsp&#8381</span></div>
            <div style="font-size: 18px; font-weight: 700; margin: 0 20px" id="totalCount">Количество: <span style="color: green">'.$_SESSION['cart-count'].'</span></div>

        </div>
        ';} ?>
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
