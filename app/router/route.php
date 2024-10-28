<?php
$routes = [
    'GET' => [
        '/' => 'home',
        '/home' => 'home',
        '/login' => 'login',
        '/logout' => 'logout',
        '/edit' => 'editProfile'
    ],
    'POST' => [
        '/login' => 'processLogin',
        '/edit' => 'processEditProfile'
    ]
];
?>