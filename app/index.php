<?php
include_once 'function.php';


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
        '/' => 'controler/home.php',
        '/about' => 'controler/about.php',
        '/contact' => 'controler/contact.php',
];

routeToController($uri,$routes);