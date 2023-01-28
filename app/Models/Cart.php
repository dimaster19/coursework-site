<?php
namespace App\Models;

class Cart
{
    public $productID = '';
    static $cartID = 1;
    function addToCart($id)
    {

        $_SESSION['cart'][$id] = [
            "id" => $id
        ];

        if (isset( $_SESSION['cart-count'])){
            ++$_SESSION['cart-count'];
        }
        else {
            $_SESSION['cart-count'] = 1;
        }


    }
    function delFromCart($id)
    {
    }
}
