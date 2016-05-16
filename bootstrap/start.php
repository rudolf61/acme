<?php
/**
 * Bootstrap
 *
 * Created by PhpStorm.
 * User: rudolf
 * Date: 14-5-2016
 * Time: 14:24
 */

session_start();

require(__DIR__ . "/../vendor/autoload.php");
// error handling
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

// routing
$router = new AltoRouter();
