<?php

namespace App\Service;

use App\Controller\HomeController;

class Router
{

    public function getUrl()
    {
        if (isset($_GET['action']) && $_GET['action'] !== '') {
        } else {
            new HomeController;
        }
    }
}
