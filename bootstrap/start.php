<?php
session_start();

require( __DIR__ . "/../vendor/autoload.php");

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

//create router obj
$router = new AltoRouter();
