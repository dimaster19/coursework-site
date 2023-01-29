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

        if (isset($_SESSION['cart-count'])) {
            $arr = [];
            if (isset($_SESSION['repeatedCart'])) {

                array_walk_recursive($_SESSION['repeatedCart'], function ($item, $key) use (&$arr) { // Двумерный массив в одномерный
                    $arr[] = $item;
                });
            }

            if (in_array((string)$id,  $arr)) {

            } else {
                ++$_SESSION['cart-count'];
            }

            $_SESSION['repeatedCart'] = $_SESSION['cart'];

        } else {
            $_SESSION['cart-count'] = 1;
            $_SESSION['repeatedCart'] = $_SESSION['cart'];

        }
    }
    function delFromCart($id)
    {
        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
            --$_SESSION['cart-count'];
            if ($_SESSION['cart-count'] == 0) {
                unset($_SESSION['cart-count']);
            }
        } $_SESSION['repeatedCart'] = $_SESSION['cart'];
    }
}
