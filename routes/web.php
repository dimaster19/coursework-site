<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'HomeController', 'method'=>'indexAction'), array()));
$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{name}', array('controller' => 'ProductController', 'method'=>'showAction'), array()));
$routes->add('signin', new Route(constant('URL_SUBFOLDER') . '/signin', array('controller' => 'UserController', 'method'=>'showAction'), array()));
$routes->add('profile', new Route(constant('URL_SUBFOLDER') . '/profile', array('controller' => 'UserController', 'method'=>'showProfile'), array()));
$routes->add('login', new Route(constant('URL_SUBFOLDER') . '/login', array('controller' => 'UserController', 'method'=>'checkUser'), array()));
$routes->add('logout', new Route(constant('URL_SUBFOLDER') . '/logout', array('controller' => 'UserController', 'method'=>'logOut'), array()));
$routes->add('cart', new Route(constant('URL_SUBFOLDER') . '/cart', array('controller' => 'CartController', 'method'=>'showPage'), array()));
$routes->add('cartaction', new Route(constant('URL_SUBFOLDER') . '/cartaction', array('controller' => 'CartController', 'method'=>'cartAction'), array()));
