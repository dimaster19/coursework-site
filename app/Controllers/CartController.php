<?php

namespace App\Controllers;

use App\Models\Cart;

use App\Models\Product;

use Symfony\Component\Routing\RouteCollection;

use function PHPSTORM_META\type;

class CartController
{

    function showPage(RouteCollection $routes)
    {


        $title = 'Корзина';
        if (isset($_SESSION['cart'])) {
            $sessionArray = $_SESSION['cart']; // Хранит ID добавленных товаров
            $products = array(); // Массив для объектов Product
            $totalPrice = 0;
            foreach ($sessionArray as $key => $value) {
                $product = new Product();
                $products[] = $product->readById(implode($value));
                $totalPrice += $product->readById(implode($value))->getPrice();
            }
        }


        require_once APP_ROOT . '/views/header.php';
        require_once APP_ROOT . '/views/cart.php';
        require_once APP_ROOT . '/views/footer.php';
    }


    function showCart()
    {
    }
    function cartAction(RouteCollection $routes)
    {

        if (isset($_GET['cart']) && isset($_GET['id'])) {

            if ($_GET['cart'] == 'add') {

                $this->addToCart($_GET['id']);
                $count = 0;
                if (isset($_SESSION['cart-count'])) {
                    $count = $_SESSION['cart-count'];
                } else {
                    $count = 0;
                }
                echo json_encode(['code' => 'ok', 'answer' =>  $count]);
            } elseif ($_GET['cart'] == 'del') {

                $this->deleteFromCart($_GET['id']);
                $count = 0;
                if (isset($_SESSION['cart-count'])) {
                    $count = $_SESSION['cart-count'];
                } else {
                    $count = 0;
                }
                echo json_encode(['code' => 'deleted', 'answer' => $_GET['id'], 'count' =>  $count]);
            } else {
                echo json_encode(['code' => 'error', 'answer' => 'error']);
            }
        } else {
            echo json_encode(['code' => 'error', 'answer' => 'Не поступили параметры']);
        }
    }

    public function addToCart($id)
    {
        $cart = new Cart;
        $cart->addToCart($id);
    }
    function deleteFromCart($id)
    {

        $cart = new Cart;
        $cart->delFromCart($id);
    }
}
