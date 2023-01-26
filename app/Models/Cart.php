<?php
class CartController
{
    public $productID = '';

    public function __construct($id)
    {
        session_start();
        $this->productID = $id;
    }
    function addToCart()
    {
        $_SESSION['cart'] = [
            "id" => $this->productID
        ];
    }
    function delFromCart()
    {
    }
}
