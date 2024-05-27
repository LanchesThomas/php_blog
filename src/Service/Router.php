<?php

namespace App\Service;

use App\Controller\FrontOffice\HomeController;
use App\View\View;
class Router
{

    private View $view;

    public function __construct()
    {
        $this->view = new View();
    }

    public function run()
    {
        $action = $_GET['action'] ? $_GET['action'] : 'home';
        if ($action === 'home') {
            $homeController = new HomeController($this->view);
            return $homeController->displayPage();
        } 
    }
}
