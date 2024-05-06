<?php

// public/index.php

require __DIR__ . '/../vendor/autoload.php';

$whoops = new \Whoops\Run();
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());
$whoops->register();

require '../src/Controller/FrontOffice/HomeController.php';
