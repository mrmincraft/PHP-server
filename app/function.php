<?php

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "<pre>";
    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] == $value;
}

function routeToController($uri,$routes){
    if(array_key_exists($uri,$routes)){
        require $routes[$uri];
    } else {
        abort(404);
    };
}

function abort($code){
    http_response_code($code);

    require "views/{$code}.php";

    die();
}