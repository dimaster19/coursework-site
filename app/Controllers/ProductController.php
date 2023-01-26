<?php

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
    public function showAction($name, RouteCollection $routes)
    {
        $product = new Product();
        $product->read(str_replace("-", " ", $name));// For a correct DB search
        $title = $name;

        require_once APP_ROOT .'/views/header.php';
        require_once APP_ROOT . '/views/product.php';
        require_once APP_ROOT .'/views/footer.php';
    }

}
