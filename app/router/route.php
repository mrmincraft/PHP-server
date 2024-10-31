<?php

$routes = [
    '/' => 'controler/home.php',
    '/about' => 'controler/about.php',
    '/contact' => 'controler/contact.php',
];

$uri = rtrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if (empty($uri)) {
    $uri = '/';
}
dd($uri);
routeToController($uri,$routes);