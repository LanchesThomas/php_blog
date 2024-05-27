<?php

// public/index.php
require_once __DIR__ . '/../vendor/autoload.php';

use App\Service\Router;



$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register();

new Router();
