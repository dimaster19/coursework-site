<?php

namespace App\Controllers;

use App\Models\Product;
use App\Controllers\ProductController;


use Symfony\Component\Routing\RouteCollection;

class HomeController
{
    // Homepage action
    public function indexAction(RouteCollection $routes)
    {
        // Можно было бы сразу к модели Product обратиться, я же ее зачем-то подключил
        // !! Исправить !!!!!
        $product = new Product();
        $title = 'Интернет-магазин техники и электроники в Донецке (ДНР), купить в DNS';

        $query = $product -> readAll();
        require_once APP_ROOT .'/views/header.php';
        require_once APP_ROOT . '/views/home.php';
        require_once APP_ROOT .'/views/footer.php';
    }


}
