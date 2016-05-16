<?php
/**
 * Created by PhpStorm.
 * User: rudolf
 * Date: 14-5-2016
 * Time: 14:26
 */

//            method, endpoint, controller#method, name
$router->map('GET', '/', 'Acme\Controllers\PageController@getShowHomePage', 'home');

$router->map('GET', '/register', 'Acme\Controllers\RegisterController@getShowRegisterPage', 'register');

$router->map('POST', '/register', 'Acme\Controllers\RegisterController@postShowRegisterPage', 'register_post');

$router->map('GET', '/login', 'Acme\Controllers\RegisterController@getShowLoginPage', 'login');

$router->map('GET', '/about', 'Acme\Controllers\RegisterController@getShowPage', 'generic_page');

/*
$router->map( 'GET', '/register', function() {
    require __DIR__ . '/../views/register.html';
});

$router->map( 'POST', '/register', function() {
    require __DIR__ . '/../views/doRegister.php';
});

$router->map( 'GET', '/login', function() {
    require __DIR__ . '/../views/doRegister.php';
});
*/