<?php

namespace App\View;

class View
{
    public function getTwig()
    {

        $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates/');
        $twig   = new \Twig\Environment($loader, []);
        return $twig;
    }
}
