<?php

namespace App\Controller;

use App\View\View;

class HomeController
{
    public function homeView()
    {
        $view = new View();
        $twig = $view->getTwig();  // Obtenez l'instance de Twig
        return $twig->render('home.twig');
    }
}

require __DIR__ . '../../../templates/frontoffice/homepage.html.twig';
