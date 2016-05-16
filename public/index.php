<?php
declare(strict_types = 1);

include(__DIR__ . "/../bootstrap/start.php");
Dotenv::load(__DIR__ . "/../");
include(__DIR__ . "/../bootstrap/db.php");
include(__DIR__ . "/../routes.php");
// map homepage


$match = $router->match();

list($controller, $method) = explode('@', $match['target']);


if (is_callable(array($controller, $method))) {
    $object = new $controller();
    call_user_func(array($object, $method), array($match['params']));
} else {
    echo "Cannot find $controller -> $method";
    exit();
//    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
}