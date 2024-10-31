<?php
include_once 'function.php';




$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


$routes = [
        '/' => 'controler/index.php',
        '/about' => 'controler/about.php',
        '/contact' => 'controler/contact.php',
];

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
};
