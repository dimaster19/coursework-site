<?php

namespace App\Controllers;

use App\Models\Cart;

use App\Models\Product;

use Symfony\Component\Routing\RouteCollection;

class CartController
{

    function showPage (RouteCollection $routes) {

        $product = new Product();
        $title = 'Корзина';
        $cartArray = array();
        foreach ($_SESSION['cart'] as $id){
            $cartArray[] = $product->readById(implode($id));
        }

        print_r($cartArray); // Выше я получаю массив объектов {Product}, нужно сделать вывод в cart.php по средствам foreach

        require_once APP_ROOT .'/views/header.php';
        require_once APP_ROOT . '/views/cart.php';
        require_once APP_ROOT .'/views/footer.php';
    }

    function start(RouteCollection $routes){
        if (isset($_GET['cart']) && isset($_GET['id'])) {

            if ($_GET['cart'] == 'add') {

                $this->addToCart( $_GET['id']);
                echo json_encode(['code' => 'ok', 'answer' => 'Добавлено']);


            } elseif ($_GET['cart'] == 'delete') {

                $this->deleteFromCart($_GET['id']);
                echo json_encode(['code' => 'ok', 'answer' => 'ok']);


            } else {
                echo json_encode(['code' => 'error', 'answer' => 'error']);
            }
        }
        else {
            echo json_encode(['code' => 'error', 'answer' => 'Не поступили параметры']);

        }
    }

    public function addToCart($id)
    {
        $cart = new Cart;
        $cart -> addToCart($id);
    }
    function deleteFromCart()
    {

        $cart = new Cart;
    }


}
